# WPManageNinja Plugins - Custom Code Snippets & Enhancements by Ruman Ahmed

![WPManageNinja](https://img.shields.io/badge/Plugins-WPManageNinja-2d5b8d?style=for-the-badge&logo=wordpress)
![License](https://img.shields.io/github/license/AlgorithmsUnlocks/WPManage-Ninja?style=for-the-badge)

A curated collection of custom code snippets, functions, and enhancements for various plugins by **WPManageNinja** (such as Fluent Forms, FluentCRM, Fluent Support, etc.). This repository serves as a central hub for extending functionality, fixing specific issues, or tailoring these powerful plugins to unique project requirements.

## 🚀 What's Inside?

This repository contains clean, well-documented PHP code that you can use to:

*   **Add New Features:** Extend the core functionality of WPManageNinja plugins beyond their default capabilities.
*   **Apply Custom Styling:** Modify the appearance of forms, dashboards, and other elements.
*   **Integrate with Third-Party Services:** Create custom workflows and data bridges between WPManageNinja plugins and other tools.
*   **Apply Specific Tweaks:** Solve common problems or implement frequently requested features not available in the standard settings.

## 📋 Prerequisites

Before using any code from this repo, ensure you have:

*   A **WordPress** installation (v5.0 or higher recommended).
*   The relevant **WPManageNinja plugin** (e.g., Fluent Forms Pro, FluentCRM) installed and activated.
*   Basic understanding of how to add custom code to WordPress (via a Code Snippets plugin or your theme's `functions.php` file).
*   A **child theme** is highly recommended if you are modifying theme-related files to prevent loss during updates.

## ⚙️ How to Use

**Warning:** Always test code on a staging site before applying it to your live production environment.

1.  **Browse the Folders:** The code is organized by the specific WPManageNinja plugin it relates to (e.g., `/fluent-forms/`, `/fluent-crm/`).
2.  **Select a Snippet:** Open the file containing the code you need. Each file is commented to explain its purpose.
3.  **Implement the Code:**
    *   **Recommended Method:** Use a dedicated plugin like [Code Snippets](https://wordpress.org/plugins/code-snippets/). This is safer than editing your theme's `functions.php` file.
    *   **Alternative Method:** Add the code to your active (child) theme's `functions.php` file.

**Example for Fluent Forms:**
If you find a file in `/fluent-forms/custom-validation.php`, you can copy its contents and add it to your "Code Snippets" plugin.

## 📁 Repository Structure

```
WPManage-Ninja/
│
├── fluent-forms/           # Custom code for Fluent Forms
│   ├── custom-validations.php
│   ├── add-custom-field-type.php
│   └── ...
│
├── fluent-crm/             # Custom code for FluentCRM
│   ├── custom-triggers.php
│   ├── add-custom-contact-field.php
│   └── ...
│
├── fluent-support/         # Custom code for Fluent Support
│   └── ...
│
├── shared/                 # Code applicable to multiple plugins
│   └── utility-functions.php
│
└── README.md              # This file
```

## 🛠️ Contributing

Contributions are welcome! If you have a useful custom snippet for a WPManageNinja plugin, please feel free to contribute.

1.  Fork the repository.
2.  Create a new branch for your feature or fix (`git checkout -b feature/amazing-snippet`).
3.  Place your code in the appropriate directory. Please use clear, descriptive file names and include comments within the code.
4.  Commit your changes (`git commit -m 'Add an amazing snippet for FluentCRM'`).
5.  Push to the branch (`git push origin feature/amazing-snippet`).
6.  Open a Pull Request.

Please ensure your code follows WordPress coding standards and is well-commented.

## ❓ Support

**This is a community-driven repository of custom code.**

*   **⚠️ No Official Support:** This code is not officially supported by WPManageNinja LLC.
*   **🐛 Report Issues:** If you find a bug in a specific snippet, please open an [Issue](https://github.com/AlgorithmsUnlocks/WPManage-Ninja/issues) here on GitHub.
*   **💡 Need Help?** For general help with the core WPManageNinja plugins, please contact their official support through your account dashboard.

## 📄 License

This project is licensed under the GPL v2 or later License - see the [LICENSE](LICENSE) file for details. This aligns with the WordPress license.

## 🙏 Acknowledgments

*   Thanks to **WPManageNinja** for creating such flexible and powerful plugins for the WordPress community.
*   Thanks to all contributors who share their knowledge and code to help others.

---

**Happy Coding!**

---
