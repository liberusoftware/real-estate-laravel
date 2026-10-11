# Real Estate Domain Architecture

## Overview

The real estate domain manages property listings, viewings, offers, sales progression, and tenant lifecycle. It integrates with external portals and supports the full property transaction lifecycle from marketing to completion.

## Property Management

Properties are the central entities representing real estate assets available for sale or rent.

| Field | Description |
|-------|-------------|
| `property_id` | Unique identifier (UUID) |
| `type` | `residential`, `commercial`, `land`, `industrial` |
| `tenure` | `freehold`, `leasehold`, `share_of_freehold` |
| `address` | Structured address with postcode |
| `bedrooms` | Number of bedrooms |
| `bathrooms` | Number of bathrooms |
| `floor_area_sqm` | Internal floor area |
| `tenure_length` | Lease length in years (leasehold) |
| `council_tax_band` | UK council tax band |
| `epc_rating` | Energy Performance Certificate rating |

### Media

- Images with ordering, captions, and primary flag
- Virtual tour URLs (Matterport, etc.)
- Floor plans with room dimensions
- Documents (title deeds, warranties, certificates)

### Valuations

- Automated valuation model (AVM) estimates
- Appraisal history with valuer notes
- Price change history with reasons

## Listing and Marketing

Listings represent properties marketed for sale or rent.

### Portal Syndication

| Portal | Feed Type | Update Frequency |
|--------|-----------|-----------------|
| Rightmove | XML/REAXML | Every 4 hours |
| Zoopla | XML/REAXML | Every 4 hours |
| OnTheMarket | JSON API | Real-time |

- Listings can be selectively published to portals
- Portal-specific field mapping and validation
- Lead capture and attribution per portal

### Staging

- Listing status: `draft`, `staging`, `live`, `under_offer`, `sold`, `withdrawn`
- Marketing notes and highlighting features
- Open house events and viewing windows

## Viewing Management

Viewings schedule physical property inspections.

### Scheduling

- Agent availability calendar integration
- Applicant preference matching
- Automated confirmation and reminder emails/SMS
- Check-in/check-out tracking

### Feedback and Follow-ups

- Structured feedback forms per viewing
- Rating system (1-5 stars) with comments
- Automated follow-up sequences based on feedback score
- Offer probability scoring

## Offer and Negotiation

### Offer Structure

| Field | Description |
|-------|-------------|
| `offer_id` | Unique identifier |
| `property_id` | Subject property |
| `applicant_id` | Offer maker |
| `amount` | Offer price |
| `currency` | GBP |
| `conditions` | `none`, `subject_to_sale`, `subject_to_survey` |
| `chain_position` | `first`, `middle`, `last`, `none` |
| `status` | `submitted`, `accepted`, `rejected`, `countered` |

### Negotiation Workflow

- Counter-offer chain with history
- Multi-party negotiation support
- Chain visualization and dependency tracking
- Solicitor instruction upon acceptance

## Sales Progression

Milestones track the transaction from offer acceptance to completion.

### Milestone Pipeline

```
offer_accepted → solicitor_instructed → searches_submitted
→ mortgage_offer_received → enquiries_raised → contracts_exchanged
→ completion
```

### Tasks and Documents

- Per-milestone task checklists
- Document upload and verification
- Automated reminders for overdue milestones
- Chain-wide progress visibility

## Tenant Management

### Screening

- Credit check integration
- Previous landlord references
- Right to Rent verification
- Affordability assessment (income × 2.5-3x)

### Leases

- Assured shorthold tenancy (AST) templates
- Break clauses and rent review provisions
- Deposit registration with TDS
- Rent collection schedule and tracking

### Maintenance

- Tenant-reported issue logging
- Contractor assignment and access coordination
- SLA tracking per issue type

## Document Management

| Document Type | Examples |
|---------------|----------|
| Contracts | Tenancy agreement, sales contract |
| Certificates | EPC, Gas Safety, EICR |
| Compliance | AML checks, Right to Rent |
| Correspondence | Email threads, letters |

- Version control with audit trail
- E-signature integration
- Retention policy enforcement

## Portal Integration

### Integration Architecture

```
┌─────────────┐     ┌──────────────┐     ┌─────────────┐
│  Rightmove  │◄───►│              │◄───►│  Property   │
├─────────────┤     │   Portal     │     │  Service    │
│   Zoopla    │◄───►│   Gateway    │◄───►│             │
├─────────────┤     │              │     └─────────────┘
│OnTheMarket  │◄───►│              │
└─────────────┘     └──────────────┘
```

- Unified portal gateway abstracts provider differences
- Webhook handlers for lead ingestion
- Rate limiting and retry logic per portal
- Feed validation before submission

## Module Boundaries and Extension Points

| Module | Extension Point |
|--------|---------------|
| `Properties` | Custom property types, valuation providers |
| `Listings` | Custom portal integrations, marketing channels |
| `Viewings` | Custom scheduling rules, feedback forms |
| `Offers` | Custom negotiation workflows, approval chains |
| `Tenancies` | Custom lease templates, rent calculation rules |
| `Documents` | Custom document types, e-sign providers |

- Domain events emitted at each state transition
- Strategy pattern for portal-specific behaviors
- Repository pattern for data access abstraction
