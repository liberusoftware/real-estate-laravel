# Panel setup and onboarding

- **Super admins:** open **Installation setup** in the admin panel's Platform settings group or use **Set up platform** on the operations dashboard. Set the global platform name, support email and hosting context, then configure the selected workspace's branches, credentials and portal request timeout.
- **Workspace owners:** use **Setup guide** in the app panel. Branch codes identify offices within that workspace. Reopening the guide updates matching codes; removing a row does not delete a branch. Archived codes must be restored through branch management before reuse.
- **End users:** **Your preferences** at `/app/welcome` configures their name and panel language. Users who cannot manage a workspace are directed here from `/dashboard`; they cannot open workspace credential settings.

Installation type records whether the deployment is SaaS or dedicated. It does not provision infrastructure, change registration policy, or disable tenant isolation. Platform identity is global; workspace branches, credentials and completion are scoped to the workspace; personal onboarding completion is scoped to the user.

Portal credentials use the existing encrypted scoped settings store. Blank credential fields retain saved values. The 5–120 second portal timeout applies to requests handled by the panel integration middleware. Background sync callers must supply their own team context and credentials. Setup never publishes listings or tests credentials automatically. OAuth clients and portal endpoint URLs remain server configuration.

Both panels use `resources/css/filament/theme.css`. Run the package manager's build script when deploying to include that entry in the Vite manifest.

The setup form appears before optional connection information. Expand **Saved connections and sign-in availability** to inspect stored configuration. Portal status requires both the client ID and secret for Rightmove, or both certificate and key paths for Zoopla and OnTheMarket; it does not test connectivity. The final installation review includes the deployment type, platform name and support email. Users can reopen personal onboarding from their dashboard shortcuts.
