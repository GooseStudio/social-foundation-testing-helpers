# Social Foundation Testing Helpers
A collection of scripts and plugins to help with automating testing with Social Foundation
If installed via Composer the plugins are automatically copied to the mu-plugin root folder.

## Plugins included

- **Plugin activator** activates/deactivates a plugin based on the slug in the reguest. 
```http://example.com?activate_plugin=pluginname/pluginname, ...```
```http://example.com?deactivate_plugin=pluginname/pluginname, ...```
- **Module enabler** enables/disables a module based on the module id in the reguest. 
```http://example.com?enable_module=module-id, ...```
```http://example.com?disable_module=module-id, ...```