---
title: "Toggle FilamentPHP Sidebar with Keyboard Shortcut"
description: "Toggle FilamentPHP Sidebar with Keyboard Shortcut."
pubDate: "Mar 21 2025"
heroImage: "sidebar.png"
---

## Introduction
In this guide, we'll explore how to add a keyboard shortcut (ctrl + s) to toggle the sidebar in FilamentPHP. This can enhance user experience by providing quick access to the sidebar without having to click the toggle button manually. We'll walk through the steps required to set this up using a simple approach.

## Prerequisites
- FilamentPHP installed and properly configured in your Laravel application.

## Implementation
### 1. Create the Js File
Create a javascript file named `toggle-sidebar.js` in your resources/js directory. This file will contain the JavaScript logic for handling the keyboard shortcut.

```js
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('keydown', function(event) {

                if (event.ctrlKey && event.key === 's') {
                    event.preventDefault();

                    const collapseButton = document.querySelector('.fi-icon-btn[title="Collapse sidebar"]');
                    const expandButton = document.querySelector('.fi-icon-btn[title="Expand sidebar"]');

                    const isSidebarOpen = expandButton.style.display ===
                        'none';

                    if (isSidebarOpen && collapseButton) {

                        collapseButton.click();

                    } else if (!isSidebarOpen && expandButton) {

                        expandButton.click();

                    }
                }

            });

        });
````
### 2. Register the File in AppServiceProvider

We'll use the FilamentAsset::register() method to inject our file into the Filament panel. This ensures our keyboard shortcut logic is always available when the panel is rendered.

Update your App\Providers\AppServiceProvider file with the following code:

````php
    public function boot()
    {
        FilamentAsset::register([
            Js::make('toggle-sidebar', resource_path('js/toggle-sidebar.js')),
        ]);
    }
````
Now, You need to run the command : php artisan filament:assets to publish this file to the public folder.

### 3. Test the Feature

Visit your Filament panel and press the specified keyboard shortcut. The sidebar should now toggle as expected!

### Conclusion

And that's it! You've successfully implemented a keyboard shortcut to toggle the FilamentPHP sidebar. This simple feature can be a big quality-of-life improvement for your application's users.

Happy coding!

