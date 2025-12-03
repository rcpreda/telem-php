"use strict";

// Document Type TinyMCE Editor with Placeholders
var DocumentTypeTinyMCE = function() {

    // Get placeholders from the data attribute
    var getPlaceholders = function() {
        var placeholdersElement = document.getElementById('placeholders-data');
        if (placeholdersElement) {
            return JSON.parse(placeholdersElement.textContent);
        }
        return {};
    };

    // Build menu items for placeholders
    var buildPlaceholderMenu = function() {
        var placeholders = getPlaceholders();
        var menuItems = {};

        Object.keys(placeholders).forEach(function(category) {
            var categoryData = placeholders[category];
            var subMenuItems = {};

            Object.keys(categoryData.placeholders).forEach(function(placeholder) {
                var description = categoryData.placeholders[placeholder];
                subMenuItems[placeholder] = {
                    text: description,
                    onAction: function() {
                        tinymce.activeEditor.insertContent(placeholder);
                    }
                };
            });

            menuItems[category] = {
                text: categoryData.label,
                getSubmenuItems: function() {
                    return Object.keys(subMenuItems).map(function(key) {
                        return {
                            type: 'menuitem',
                            text: subMenuItems[key].text + ' (' + key + ')',
                            onAction: subMenuItems[key].onAction
                        };
                    });
                }
            };
        });

        return menuItems;
    };

    // Initialize TinyMCE for a specific selector
    var initTinyMCE = function(selector) {
        var options = {
            selector: selector || '.tinymce-editor',
            height: 500,
            menubar: 'file edit view insert format tools table',
            plugins: 'lists link charmap preview anchor searchreplace visualblocks code fullscreen table help wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | ' +
                     'alignleft aligncenter alignright alignjustify | ' +
                     'bullist numlist outdent indent | removeformat | ' +
                     'placeholders | code | fullscreen',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; font-size: 14px; }',
            promotion: false,
            branding: false,
            external_plugins: {},

            // Add custom button for placeholders
            setup: function(editor) {
                var placeholderMenuItems = buildPlaceholderMenu();

                editor.ui.registry.addMenuButton('placeholders', {
                    text: 'Insert Placeholder',
                    icon: 'template',
                    fetch: function(callback) {
                        var items = [];
                        Object.keys(placeholderMenuItems).forEach(function(key) {
                            items.push({
                                type: 'nestedmenuitem',
                                text: placeholderMenuItems[key].text,
                                getSubmenuItems: placeholderMenuItems[key].getSubmenuItems
                            });
                        });
                        callback(items);
                    }
                });

                // Highlight placeholders in the editor
                editor.on('init', function() {
                    editor.formatter.register('placeholder', {
                        inline: 'span',
                        classes: 'tinymce-placeholder',
                        attributes: {
                            'data-placeholder': '%value'
                        }
                    });
                });
            }
        };

        // Apply dark mode if needed
        var isDarkMode = document.documentElement.getAttribute('data-bs-theme') === 'dark';
        if (isDarkMode) {
            options['skin'] = 'oxide-dark';
            options['content_css'] = 'dark';
        }

        tinymce.init(options);
    };

    return {
        init: function() {
            // Check if any tinymce editor elements exist
            if (document.querySelector('.tinymce-editor')) {
                // Initialize English editor (visible by default)
                initTinyMCE('#document_content_en');

                // Initialize Romanian editor when tab is shown
                var roTab = document.querySelector('a[href="#content_ro_tab"]');
                if (roTab) {
                    roTab.addEventListener('shown.bs.tab', function (e) {
                        // Check if Romanian editor is already initialized
                        if (!tinymce.get('document_content_ro')) {
                            initTinyMCE('#document_content_ro');
                        }
                    });
                }
            }
        }
    };
}();

// Initialize on DOM ready
if (typeof KTUtil !== 'undefined') {
    KTUtil.onDOMContentLoaded(function() {
        DocumentTypeTinyMCE.init();
    });
} else {
    document.addEventListener('DOMContentLoaded', function() {
        DocumentTypeTinyMCE.init();
    });
}
