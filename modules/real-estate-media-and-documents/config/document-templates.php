<?php

declare(strict_types=1);

return [
    'demonstrations' => [
        [
            'slug' => 'uk-tenancy-agreement-demo',
            'name' => 'UK Residential Tenancy Agreement (Demonstration)',
            'description' => 'A structured UK-focused example for product demonstrations. It is not legal advice and must be reviewed for the property and current law.',
            'document_type' => 'tenancy_agreement',
            'locale' => 'en-GB',
            'variables' => ['landlord_name', 'tenant_name', 'property_address', 'start_date', 'fixed_term', 'rent_amount', 'rent_frequency', 'deposit_amount', 'governing_law'],
            'sections' => ['parties', 'property', 'term', 'rent_and_deposit', 'repair_and_access', 'ending_the_tenancy', 'signatures'],
            'content' => <<<'TEMPLATE'
UK RESIDENTIAL TENANCY AGREEMENT — DEMONSTRATION ONLY

This example is provided for software demonstrations and is not a prescribed form or legal advice. Obtain current professional advice before use.

1. Parties
Landlord: {{ landlord_name }}
Tenant: {{ tenant_name }}

2. Property
The property is {{ property_address }}.

3. Term
The tenancy starts on {{ start_date }} and continues for {{ fixed_term }}.

4. Rent and deposit
Rent: {{ rent_amount }} {{ rent_frequency }}.
Deposit: {{ deposit_amount }}. Any deposit handling must comply with the applicable scheme and law.

5. General terms
The parties should record repair, access, permitted use, notice, safety, privacy and inventory arrangements in the final reviewed agreement.

6. Governing law
{{ governing_law }}. The applicable jurisdiction and statutory requirements must be confirmed before signing.

Landlord signature: ____________________    Date: __________
Tenant signature: ______________________    Date: __________
TEMPLATE,
        ],
        [
            'slug' => 'uk-sales-memorandum-demo',
            'name' => 'UK Sales Memorandum (Demonstration)',
            'description' => 'A UK-focused, non-contractual sales memorandum example for demonstrations. It is subject to contract and legal review.',
            'document_type' => 'sales_memorandum',
            'locale' => 'en-GB',
            'variables' => ['seller_name', 'buyer_name', 'property_address', 'asking_price', 'agreed_price', 'agent_name', 'special_conditions'],
            'sections' => ['parties', 'property', 'price', 'conditions', 'important_notice', 'acknowledgement'],
            'content' => <<<'TEMPLATE'
MEMORANDUM OF SALE — DEMONSTRATION ONLY

This memorandum records the current understanding of the parties. It is not a contract, is subject to contract, and does not create a binding obligation to sell or purchase.

Seller: {{ seller_name }}
Buyer: {{ buyer_name }}
Property: {{ property_address }}
Agent: {{ agent_name }}
Asking price: {{ asking_price }}
Agreed price: {{ agreed_price }}
Special conditions or notes: {{ special_conditions }}

The parties should obtain independent legal advice and confirm title, fixtures and fittings, services, inclusions, chain information, searches, finance, exchange and completion arrangements in the contract documentation.

Seller acknowledgement: ____________________    Date: __________
Buyer acknowledgement: _____________________    Date: __________
TEMPLATE,
        ],
        [
            'slug' => 'generic-tenancy-agreement-demo',
            'name' => 'Residential Tenancy Agreement (Generic Demonstration)',
            'description' => 'A jurisdiction-neutral tenancy example. Replace the governing-law and statutory sections for the selected locale.',
            'document_type' => 'tenancy_agreement',
            'locale' => 'en',
            'variables' => ['landlord_name', 'tenant_name', 'property_address', 'start_date', 'term', 'rent_amount', 'deposit_amount', 'governing_law'],
            'sections' => ['parties', 'property', 'term', 'payments', 'responsibilities', 'ending', 'signatures'],
            'content' => <<<'TEMPLATE'
RESIDENTIAL TENANCY AGREEMENT — GENERIC DEMONSTRATION

This is a software demonstration template, not legal advice. Adapt it to the laws and required notices of the property's jurisdiction before use.

Landlord: {{ landlord_name }}
Tenant: {{ tenant_name }}
Property: {{ property_address }}
Start date: {{ start_date }}
Term: {{ term }}
Rent: {{ rent_amount }}
Deposit: {{ deposit_amount }}
Governing law: {{ governing_law }}

The final agreement should address habitability, repairs, access, permitted use, privacy, payments, deposit protection, notices, dispute resolution and termination according to local law.

Landlord signature: ____________________    Date: __________
Tenant signature: ______________________    Date: __________
TEMPLATE,
        ],
        [
            'slug' => 'generic-sales-memorandum-demo',
            'name' => 'Sales Memorandum (Generic Demonstration)',
            'description' => 'A jurisdiction-neutral memorandum of sale example, suitable as a starting point for localized sales workflows.',
            'document_type' => 'sales_memorandum',
            'locale' => 'en',
            'variables' => ['seller_name', 'buyer_name', 'property_address', 'price', 'agent_name', 'conditions', 'governing_law'],
            'sections' => ['parties', 'property', 'price', 'conditions', 'status', 'acknowledgement'],
            'content' => <<<'TEMPLATE'
MEMORANDUM OF SALE — GENERIC DEMONSTRATION

This document records preliminary commercial terms only. It is not a contract unless the applicable law expressly provides otherwise.

Seller: {{ seller_name }}
Buyer: {{ buyer_name }}
Property: {{ property_address }}
Price: {{ price }}
Agent: {{ agent_name }}
Conditions: {{ conditions }}
Governing law: {{ governing_law }}

The parties should use locally reviewed contract documents for title, disclosures, searches, finance, exchange, completion and any cooling-off or consumer rights.

Seller acknowledgement: ____________________    Date: __________
Buyer acknowledgement: _____________________    Date: __________
TEMPLATE,
        ],
    ],
];
