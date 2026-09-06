# Real Estate Media and Documents

Provider-neutral media and document records for photos, floorplans, video, certificates, brochures, rights, ordering, retention, reusable transaction templates, and digital signing. The package name is `liberusoftware/real-estate-media-and-documents`; its source repository intentionally uses the `module-` prefix.

## Transaction document pattern

Templates are reusable, team-scoped definitions. `document_type` identifies the business document (for example `tenancy_agreement` or `sales_memorandum`), `version` makes published definitions immutable, and `variables`/`sections` describe the fields and layout expected by the renderer.

When a transaction document is created, `CreateDocumentEnvelope` renders the selected published template and stores the exact values, rendered content, and SHA-256 content hash. The envelope is the immutable signing subject; it is not re-rendered after invitations are issued. Participants are ordered by `signing_order` and carry their own role, identity, invitation, view, and signature state.

`SignDocumentEnvelope` records the signature method, consent timestamp, signer metadata, signature hash, and the envelope content hash. It prevents signing a completed or voided envelope, prevents duplicate signatures, enforces sequential signing, and moves the envelope to `completed` only after every participant has signed. This keeps tenancy agreements, sales memoranda, and future document types on the same workflow without coupling them to a particular signature provider.

API endpoints:

- `POST /api/v1/real-estate/media-and-documents/templates/{template}/envelopes`
- `GET /api/v1/real-estate/media-and-documents/envelopes/{envelope}`
- `POST /api/v1/real-estate/media-and-documents/envelopes/{envelope}/participants/{participant}/sign`
