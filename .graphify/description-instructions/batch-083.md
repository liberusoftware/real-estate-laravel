# Node Description Batch 84 of 212

Graphify is running in assistant/skill mode (no API key). You are the host
assistant (Claude Code / Codex / Gemini CLI). Read the prompt below and write
your JSON answer to the answer file.

## Prompt

You are documenting nodes in a knowledge graph.
For each entry below, write ONE concise factual plain-language sentence
describing what it is or does. Use only the provided context.
For an entity node (any other kind — e.g. a person, place, event, object),
describe what the entity is and its role, grounded in its type, its
relations (neighbors) and the provided citations/evidence — e.g.
"Lady Carfax, a wealthy heiress who disappears en route to Lausanne.".
Ground entity descriptions in the citations/evidence when present; do not
speculate beyond the context, so a node with no supporting context may be
left out of the reply.
LANGUAGE: each entry has a `lang=` marker giving the language of its source.
Write that entry's description in EXACTLY that language. Do not translate to
a single common language — match each node's source language individually.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5785a773d04994d3e7aa19924ec86f7655100cdb": "5785a77 fix(design): map showed NaN prices and was an XSS sink" | kind=Commit | source=git | neighbors=[53531d8 feat(design): home page leads w…, main, 40a6fb7 feat(design): unhide filtered s…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5a076f57153d71aacfaf80607f1e29423eaad4cd": "5a076f5 Search current property viewings" | kind=Commit | source=git | neighbors=[13e015d Complete agency performance rep…, main, d456865 Complete regional setup defaults] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5c4aa56bd9c3eeb636406193f5f25ab0308a6038": "5c4aa56 Add Codecov coverage badge (#1307)" | kind=Commit | source=git | neighbors=[2d8dfb2 Integrate real estate theme and…, main, 1331232 Include modules and themes in c…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5d4dc0cbd5113c7184137fa583955d515d42c874": "5d4dc0c Address code review: extract constants, improve TODO comment" | kind=Commit | source=git | neighbors=[main, a78602e Merge pull request #1253 from l…, f5a62bf Fix failing tests and logic iss…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5e30f72dc82333c54d3f67909ed4fbe61356cc2a": "5e30f72 Initial plan" | kind=Commit | source=git | neighbors=[3da31ff Merge pull request #1252 from l…, main, 1174981 Initial plan: fix failing tests] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5e788cefd9d47dffe5945f3d1f250dff97e0ee34": "5e788ce Add bilingual organisation localisation" | kind=Commit | source=git | neighbors=[0a56ed3 Add branch and currency to list…, main, fdf2553 Document full real estate scope…] | lang=fr
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5f4b22b3d7e576b7121442ebe6003f3d244e97e8": "5f4b22b fix(design): rental statuses, wishlist regression, strip overflow" | kind=Commit | source=git | neighbors=[main, 53531d8 feat(design): home page leads w…, 90298bd feat(design): property card and…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@66b36a40e1c3f97c73fd200542991ba2b715eb13": "66b36a4 Update dependencies including to Laravel 13, PHP 8.5, Filament 5 and Li…" | kind=Commit | source=git | neighbors=[main, 3df11b3 Claude, 8a81cb0 Update dependencies including t…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@6abeb57dd0c9e9f4dfad33f82cd922131de538ca": "6abeb57 Fix phpunit test failures: remove deprecated @test annotations, fix DB_…" | kind=Commit | source=git | neighbors=[main, fd5f54a Add default values to GeneralSe…, fc92cc8 Initial plan] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@6d09bd20f4fcae6804f77b1910ebf0ca359d4699": "6d09bd2 feat(design): contact form, and stop discarding what it collects" | kind=Commit | source=git | neighbors=[0a16901 fix(design): the filter fix rea…, main, 9cbd3b9 fix(design): sold stock badged …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@77c84901b68b683f3af3dd64632f3c15811678ba": "77c8490 Update dependencies" | kind=Commit | source=git | neighbors=[51098ed Add supervisord.reverb.conf, main, fdd4bc0 Fix docker main.yml] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@7f9b2bfd5b888c34f17a2565390d2b06a9e835d0": "7f9b2bf fix(booking): stop offering a day that is already booked" | kind=Commit | source=git | neighbors=[508d2bf feat(design): booking a viewing…, main, eff8257 fix(nav): open the menu dropdow…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8069a15a93db3e15e6232135453d2af2ddfcd806": "8069a15 feat(footer): publish the agency's registration and redress details" | kind=Commit | source=git | neighbors=[main, 8c6e464 fix: apply two rounds of review…, c47d7e1 fix(listings): let a property b…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8210fc5c15ad4afb32998d5ecfc6a9365ff5cf2b": "8210fc5 Initial plan" | kind=Commit | source=git | neighbors=[main, c02ebae Fix: Accept application/x-empty…, afd0be1 Merge pull request #1254 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@83ae8f92bd8883bc5d990a686dded383a8a50a59": "83ae8f9 Initial plan" | kind=Commit | source=git | neighbors=[main, cc67307 Fix main.yml: correct docker ac…, d97e09c Update dependencies] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8acab4b988b36e8543873c2f3784fa78bbfafa22": "8acab4b Process property media uploads" | kind=Commit | source=git | neighbors=[main, 13e015d Complete agency performance rep…, 9c4619e Complete property record details] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8c880ef52d8cc74cf3cce03ffa2d86211a72288d": "8c880ef Fix failing tests: migrations, models, views, middleware" | kind=Commit | source=git | neighbors=[main, 38e3b5f Fix route parameter mismatches …, 9672d83 Initial plan] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8f64baf00a0813b356196590c8e7608c8110fda0": "8f64baf Refresh published module references" | kind=Commit | source=git | neighbors=[main, e9bffaf Apply complete module formatting, b034339 Harden release verification and…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@90298bd48d7430f59942c42e76832106b93bff8e": "90298bd feat(design): property card and the disclosure strip" | kind=Commit | source=git | neighbors=[main, 5f4b22b fix(design): rental statuses, w…, e364fb3 fix(design): remove a CDN regre…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@95899d0ff4d586eb94cd1351e85593bac5dd26b9": "95899d0 Add PropertyValuationFactory to fix test_valuation_controller_gets_hist…" | kind=Commit | source=git | neighbors=[0e035e4 Fix ExampleTest to properly set…, main, 3da31ff Merge pull request #1252 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@9672d83361bab6233608ceb0c9ee8cfae96d503f": "9672d83 Initial plan" | kind=Commit | source=git | neighbors=[3f51796 Merge pull request #1251 from l…, main, 8c880ef Fix failing tests: migrations, …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@9ab0bd1d7fcf12098e4ab1d2834ac659d2b6948d": "9ab0bd1 Update Dockerfile to PHP 8.5" | kind=Commit | source=git | neighbors=[main, fd0635b Merge branch 'main' of github.c…, a601264 Update workflows] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@9c4619e91df3b90d9b9ded820f2347bd6e0c74eb": "9c4619e Complete property record details" | kind=Commit | source=git | neighbors=[81d1600 Add CRM document access controls, main, 8acab4b Process property media uploads] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@a43e7ca96dc70dcac4cd73935653d2d6cdce918d": "a43e7ca Update workflows" | kind=Commit | source=git | neighbors=[main, 4cf221a Update workflows, d1b5534 Update installer and setup] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@a6012643674e1017d184bee63812170489020ab0": "a601264 Update workflows" | kind=Commit | source=git | neighbors=[main, 9ab0bd1 Update Dockerfile to PHP 8.5, d97e09c Update dependencies] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@aaa5e6e3273422c4b88f73824797e4cfa5131ad5": "aaa5e6e fix(dashboard): link a super_admin to the panel they can open" | kind=Commit | source=git | neighbors=[1b76115 fix(nav): give the top navigati…, main, ddade0b feat(property): put every contr…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@ab2ffa3e19cf6f0c4d6d9d0f4ea364795e4a1bcf": "ab2ffa3 Update dependencies" | kind=Commit | source=git | neighbors=[46d9d4c Vite 8, vite plugin static copy…, main, 506ccda Fix test workflow] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@addbb82b2b10a2a3a35f16616cba028240f2a8d7": "addbb82 Update dependencies" | kind=Commit | source=git | neighbors=[0812f9b Update main workflow Docker wit…, main, 51098ed Add supervisord.reverb.conf] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@adf5fe2df7c2841651f19991422f02b00b4a3796": "adf5fe2 feat(design): comparison table and wishlist" | kind=Commit | source=git | neighbors=[main, 32b3ede fix(design): comparison search …, dc9f4b0 fix(design): the map only follo…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@bd34a143fe3bd13ce527add76360a2bff4ad8fdc": "bd34a14 Fix flaky reschedule test by setting booking date far enough in future" | kind=Commit | source=git | neighbors=[052e63b Update dependencies, main, 750c68d Add socialstream, agent role, k…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@c02ebae28bc679d07d43dc56f7d8bebafd659537": "c02ebae Fix: Accept application/x-empty MIME type in videos media collection fo…" | kind=Commit | source=git | neighbors=[8210fc5 Initial plan, main, bdf23d6 Merge pull request #1255 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@c17ab56f6a32a9b17f6eb82ea2017e359f1f5ded": "c17ab56 Fix docker main.yml" | kind=Commit | source=git | neighbors=[1555721 Fix docker main.yml, main, 46d9d4c Vite 8, vite plugin static copy…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@c1e13bf1cf95cbce156d2aa0d96b6fc4c4ec0c34": "c1e13bf Refresh Composer lock content hash" | kind=Commit | source=git | neighbors=[main, 2f18670 Conform real estate modules and…, dcf8f88 Pin API access idempotency sour…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@c47d7e1a7acf8d05a62a90308092e75e7a833895": "c47d7e1 fix(listings): let a property be older than 1901" | kind=Commit | source=git | neighbors=[main, 8069a15 feat(footer): publish the agenc…, e6bd4bd fix(booking): a viewing at 09:0…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@cab74251842636c077eeae863b502369f51644d6": "cab7425 fix(valuation): scope the report to the model, and gate re-running it" | kind=Commit | source=git | neighbors=[4a7ee8c feat(valuation): quote a band, …, main, e8a6e6d fix(auth): render the socialstr…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@cc67307c1ea42b66f9b6f5f6b6a8f8aeb27fa793": "cc67307 Fix main.yml: correct docker action tags to v5/v6, add MySQL service co…" | kind=Commit | source=git | neighbors=[83ae8f9 Initial plan, main, da0ba47 Merge pull request #1256 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d1188ad11d397e988cc8a273fd971220851c8c6c": "d1188ad feat(design): Survey Sheet foundation across the public site" | kind=Commit | source=git | neighbors=[main, f0209b9 fix(design): bind dark: to the …, fdf2553 Document full real estate scope…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d1b55347ee112ecee9f438d253b2e66d9fa3f1b6": "d1b5534 Update installer and setup" | kind=Commit | source=git | neighbors=[529d0fd Update docker, main, a43e7ca Update workflows] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d456865aac68854d472bc8bdb29d9884046f1555": "d456865 Complete regional setup defaults" | kind=Commit | source=git | neighbors=[5a076f5 Search current property viewings, main, 13a78a4 Schedule tenant portal synchron…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d85600ddbb3d052aa91f98500d950080f48ff7e7": "d85600d fix(design): complete the primary ramp and unblind the sweep" | kind=Commit | source=git | neighbors=[0755a5b feat(design): acceptance sweep …, main, ee449c8 feat(design): content, news and…] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-083.json

Keep each description factual and concise (one sentence). No markdown, no prose
outside the JSON object. It is acceptable to omit a node if context is
insufficient — but include every node you can ground confidently.

Example answer format:
```json
{
  "node_id_1": "Resolves the configured ontology profile from graphify.yaml.",
  "node_id_2": "Colonel James Barclay, an antagonist in The Crooked Man."
}
```
