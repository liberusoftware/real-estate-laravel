# Node Description Batch 83 of 212

Graphify is running in assistant/skill mode (no API key). You are the host
assistant (Claude Code / Codex / Gemini CLI). Read the prompt below and write
your JSON answer to the answer file.

## Prompt

You are documenting nodes in a knowledge graph.
For each entry below, write ONE concise factual plain-language sentence
describing what it is or does. Use only the provided context.
For a code symbol (kind=code-symbol — a function, class, or constant),
describe what the function/symbol does based on its name, source location
and neighbors — e.g. "Resolves the configured ontology profile from graphify.yaml.".
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

- "columns_select_me": "Me()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, it(), xi()] | lang=en
- "columns_select_pe": "pe()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, F(), x()] | lang=en
- "columns_select_populatelabelrepositoryfromoptions": "populateLabelRepositoryFromOptions()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, openDropdown(), render()] | lang=en
- "columns_select_positiondropdown": "positionDropdown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, filterOptions(), openDropdown()] | lang=en
- "columns_select_scrolloptionintoview": "scrollOptionIntoView()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, focusNextOption(), focusPreviousOption()] | lang=en
- "columns_select_vi": "vi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Rt(), Xt()] | lang=en
- "columns_text_input": "text-input.js" | kind=code-symbol | source=public/js/filament/tables/components/columns/text-input.js:L1 | neighbors=[a(), 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "columns_toggle": "toggle.js" | kind=code-symbol | source=public/js/filament/tables/components/columns/toggle.js:L1 | neighbors=[a(), 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@000ccd5b4a389e8889ed7ec531daf93be1e06d5b": "000ccd5 fix: close the media route, and eight more review findings" | kind=Commit | source=git | neighbors=[main, 4a7ee8c feat(valuation): quote a band, …, 086ae2d feat(listings): pair a result w…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@052e63b727da1244c10a6096ef41a8a6aa3cfb4b": "052e63b Update dependencies" | kind=Commit | source=git | neighbors=[main, bd34a14 Fix flaky reschedule test by se…, f86f80a Fix docker build] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@056e34b08a334fe9fff302a371d2f2c9b75bdce7": "056e34b Fix PermissionsSeeder to use shield:generate instead of missing permiss…" | kind=Commit | source=git | neighbors=[main, e3f0f4c Update dependencies, 675053f Add modules system, security ha…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@086ae2d98af3c6bf864338bfb818036e62a8a963": "086ae2d feat(listings): pair a result with its pin" | kind=Commit | source=git | neighbors=[main, 000ccd5 fix: close the media route, and…, 222cd2e fix: serve the media the app ac…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0a169015cb480fce9b03d54f7f4b2012442a8cdd": "0a16901 fix(design): the filter fix reached only one of two callers" | kind=Commit | source=git | neighbors=[main, 6d09bd2 feat(design): contact form, and…, 40a6fb7 feat(design): unhide filtered s…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0a56ed392dcd963c82434af3ac66452fdf1602cf": "0a56ed3 Add branch and currency to listings" | kind=Commit | source=git | neighbors=[main, 5e788ce Add bilingual organisation loca…, 1736251 Dispatch core workflow notifica…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0bf65c270c9a5cf5e4e43b85427e6cb41f2a631c": "0bf65c2 Fix 4 test errors and 2 test failures in AgentMatch, Booking, VirtualTo…" | kind=Commit | source=git | neighbors=[main, afd0be1 Merge pull request #1254 from l…, 56a64b2 Initial plan] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0cf7b7cac25ba4f206968ee707f888d73f55c30f": "0cf7b7c Fix permissions seeder completion" | kind=Commit | source=git | neighbors=[main, 75f7818 Bootstrap application from Libe…, 42d4a59 Update dependencies] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@10d5d921ce7bc55e5a032494bc311b9bc2db6304": "10d5d92 Pin module sources to HTTPS conformance commits" | kind=Commit | source=git | neighbors=[main, 8cf045c Implement real estate module co…, 799806e Conform real estate modules to …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1174981db850309f1b83c02731ab3b6d55d9804f": "1174981 Initial plan: fix failing tests" | kind=Commit | source=git | neighbors=[main, f5a62bf Fix failing tests and logic iss…, 5e30f72 Initial plan] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1331232fea0ee543335cd8dcc2f55497d7cd704b": "1331232 Include modules and themes in coverage reporting (#1308)" | kind=Commit | source=git | neighbors=[main, e8b93fc Implement remaining real estate…, 5c4aa56 Add Codecov coverage badge (#13…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@15557211f451d05d1c2b73c174840fb2a1a7400c": "1555721 Fix docker main.yml" | kind=Commit | source=git | neighbors=[main, c17ab56 Fix docker main.yml, fdd4bc0 Fix docker main.yml] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1902f33c84ffe736e160136eebe1ff3c5eb82b37": "1902f33 feat(design): search, applied filters and the results-and-map pane" | kind=Commit | source=git | neighbors=[main, dc9f4b0 fix(design): the map only follo…, 9cbd3b9 fix(design): sold stock badged …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1b761158c91aa10c54aa58b2ac7e3e434af1beb3": "1b76115 fix(nav): give the top navigation room and let its dropdowns be clicked" | kind=Commit | source=git | neighbors=[main, aaa5e6e fix(dashboard): link a super_ad…, 98dde9e Merge pull request #1299 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1e71b40661f539b44a2e052212239b710dde29a5": "1e71b40 fix: apply review findings across booking, cards and the record" | kind=Commit | source=git | neighbors=[main, 53be7b8 feat(listings): show every room…, dca714d feat(listings): show what a pro…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@27def5ae969ac07d006031a5b587375a7f214b4d": "27def5a Make release publication idempotent (#1305)" | kind=Commit | source=git | neighbors=[main, 2d8dfb2 Integrate real estate theme and…, 4942107 Include local modules in contai…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@2affb8377aa6bf796e042a10d7c569bb1f867707": "2affb83 Lock published module package names" | kind=Commit | source=git | neighbors=[main, f4845d1 Complete real estate property m…, 881febf Normalize module package names …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@32b3ede1ade399350b769603059aef59a3009d79": "32b3ede fix(design): comparison search was dead and the map fix missed the empt…" | kind=Commit | source=git | neighbors=[main, 0755a5b feat(design): acceptance sweep …, adf5fe2 feat(design): comparison table …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@38e3b5fff082a565a4fa8fba35b883476bd1d687": "38e3b5f Fix route parameter mismatches in API controllers using implicit model …" | kind=Commit | source=git | neighbors=[main, 0e035e4 Fix ExampleTest to properly set…, 8c880ef Fix failing tests: migrations, …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@40a6fb7118b9e5b8b8c92a5117b6589fdcc5d9e6": "40a6fb7 feat(design): unhide filtered stock, disclose the record on the detail …" | kind=Commit | source=git | neighbors=[main, 0a16901 fix(design): the filter fix rea…, 5785a77 fix(design): map showed NaN pri…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@42d4a598be9e18c63b175d75cd1722e8b89513fe": "42d4a59 Update dependencies" | kind=Commit | source=git | neighbors=[main, 0cf7b7c Fix permissions seeder completi…, 45479e6 Merge pull request #1301 from l…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@46d9d4c746976f3dd051f245e662c0e4494ad009": "46d9d4c Vite 8, vite plugin static copy 4.1, laravel vite plugin 3.1" | kind=Commit | source=git | neighbors=[main, ab2ffa3 Update dependencies, c17ab56 Fix docker main.yml] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@494210779d046bf1af3617c588e1b6cfb47cbbab": "4942107 Include local modules in container dependency stage" | kind=Commit | source=git | neighbors=[main, 27def5a Make release publication idempo…, e9bffaf Apply complete module formatting] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@4a7ee8cffa682792abdc5b62fa14a91a67ce93e2": "4a7ee8c feat(valuation): quote a band, and delete the auctions that never exist…" | kind=Commit | source=git | neighbors=[000ccd5 fix: close the media route, and…, main, cab7425 fix(valuation): scope the repor…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@4cf221a19db9138fd94739cdb2ad3fcff491e606": "4cf221a Update workflows" | kind=Commit | source=git | neighbors=[main, f79fa72 Merge branch 'main' of github.c…, a43e7ca Update workflows] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@506ccdaca9b9e75b4751f42c6c748bd4ed3598ae": "506ccda Fix test workflow" | kind=Commit | source=git | neighbors=[main, f86f80a Fix docker build, ab2ffa3 Update dependencies] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@508d2bfba48b9b2da28a52c6ceb43976b51a659b": "508d2bf feat(design): booking a viewing, which had never worked" | kind=Commit | source=git | neighbors=[main, 7f9b2bf fix(booking): stop offering a d…, 5610609 fix(design): the tenancy POST f…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@51098ed6a43342b2c54b3b97469e01ae8445cf84": "51098ed Add supervisord.reverb.conf" | kind=Commit | source=git | neighbors=[main, 77c8490 Update dependencies, addbb82 Update dependencies] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@53531d8e42ce6e5c0e57101b01c4f8d0b598f965": "53531d8 feat(design): home page leads with the search" | kind=Commit | source=git | neighbors=[main, 5785a77 fix(design): map showed NaN pri…, 5f4b22b fix(design): rental statuses, w…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@53be7b8019e41f48c1428ac53030faf5932d6c64": "53be7b8 feat(listings): show every room, and say what a model produced" | kind=Commit | source=git | neighbors=[1e71b40 fix: apply review findings acro…, main, 222cd2e fix: serve the media the app ac…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5610609313dec154a7a31189c8dbe7a4c8a8fdca": "5610609 fix(design): the tenancy POST fix was itself a 500" | kind=Commit | source=git | neighbors=[main, 508d2bf feat(design): booking a viewing…, ee449c8 feat(design): content, news and…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@56a64b2c276b578996d4cea9993311d8cea09f29": "56a64b2 Initial plan" | kind=Commit | source=git | neighbors=[main, 0bf65c2 Fix 4 test errors and 2 test fa…, a78602e Merge pull request #1253 from l…] | lang=pt

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-082.json

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
