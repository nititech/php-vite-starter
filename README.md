<img src="https://nititech.de/kosmo-header.png" style="width: 100%;" />

<h1 style="margin-bottom:0">PHP-Vite Starter Repo <span style="font-size:1rem;">by <a href="https://nititech.de" target="_blank">nititech</a></span></h1>

php-vite-starter is a modern vanilla PHP-Vite starter repository designed to provide developers with the essential tools to kickstart their development of modern PHP applications.\
This repository utilizes [Vite](https://vitejs.dev/) and the [`vite-plugin-php` plugin](https://github.com/donnikitos/vite-plugin-php) to improve developer experience and provide various features to streamline development.

## Features

-   **Auto-refresh / auto-reloading**
-   **JS environmental variables in PHP**: Use environmental variables supplied in `.env` or to Vite in your PHP code.
-   **FastRoute router**: Fast and simple preconfigured router.
-   **TypeScript / JavaScript Transpilation**: Write modern JavaScript or TypeScript code, which will be automatically transpiled to browser-compatible JavaScript.
-   **Tailwind CSS Implementation**: Utilize Tailwind CSS for rapid UI development with utility-first classes.
-   **SASS / SCSS Support**: Write styles using SASS or SCSS syntax, with built-in support for compilation.
-   **EJS Template Language Support**: Use the EJS (Embedded JavaScript) templating language for using JavaScript pieces in your PHP-files.
-   **Image Transform Tools**: Easily manage and transform images as needed for your application.
-   **SVG Loader**: Load SVG files directly into your project, allowing for scalable vector graphics usage.

## Usage

1. **Clone the Repository**: Start by cloning this repository to your local machine.

```bash
git clone https://github.com/nititech/php-vite-starter.git
```

2. **Install Dependencies**: Navigate into the project directory and install the necessary dependencies using npm or yarn.

```bash
cd php-vite-starter
npm install
npm run composer install
```

## Development

3. Start the development server, just run the following command:

```bash
npm run dev
```

Now you can access your application. Once the server is running, you can access your application by navigating to http://localhost:3000/ in your web browser.

## Project Structure

##### /bin

```
├── bin
│   ├── composer.phar
│   ├── **/*
```

-   This folder is supposed to hold binaries that are needed for project compilations and such
-   Currently holds only `composer.phar` for the `composer` command

##### /index.php

This is the app entry point ⚠️

-   Routing is now programmatic and uses [nikic' `FastRoute`](https://github.com/nikic/FastRoute) router -> for configuration see the `/configs/routes.php` file
-   Non-PHP files will not go through this router
-   Nonexisting files and paths will go through this router

##### /configs

```
├── configs
│   ├── env.php
│   ├── routes.php
│   ├── **/*
```

-   `env.php` will be transpiled using Vite and the `vite-plugin-php` plugin -> here you can store tokens or other constants that should be reused through the app.\
    We use it to define the constants that we import from Vite.
-   `routes.php` holds the routing configuration that is being used by FastRoute

##### /pages

```
├── pages
│   ├── **/*.php
```

-   This `.php` files will be transpiled using Vite and the `vite-plugin-php` plugin

##### /partials

```
├── partials
│   ├── **/*.php
```

-   Includable files (like components)
-   These `.php` files will be transpiled using Vite and the `vite-plugin-php` plugin

##### /public

```
├── public
│   ├── **/*
```

-   Publicly accessible files should be placed here
-   Can be accessed by `/example-file.extension` in image, script, style, ... tags
-   Files will not be transpiled

##### /raw

```
├── raw
│   ├── .htaccess
│   ├── **/*
```

-   These files will be copied into the root of your build
-   Usually used for configurations, routers and so on (like the included `.htaccess`)

##### /src

```
├── src
│   ├── scripts
│   │   ├── **/*
│   ├── styles
│   │   ├── **/*
```

-   This folder should be used for files that need be handled by Vite
-   Files can be accessed for example by `/src/styles/example-style.scss` or `/src/scripts/some-script.ts`

##### /system

```
├── system
│   ├── **/*
```

-   `.php` files in this folder will not be transpiled
-   Usually used for autoloaders, database connections etc.

##### /vendor

```
├── vendor
│   ├── **/*
```

-   Vendor files installed by Composer
-   `.php` Files will not be transpiled

## Production Build

To generate a production build of your project, use:

```bash
npm run build
```

#### Output

All files will be generated and copied into the `/dist` folder.

```
├── dist
│   ├── configs (Files copied from the ./configs folder)
│   │   ├── env.php (Transpiled to include environmental variables)
│   │   ├── routes.php
│   │   ├── **/*
│   ├── pages
│   │   ├── **/* (Transpiled PHP files from your ./pages folder)
│   │
│   ├── partials
│   │   ├── **/* (Transpiled PHP files from your ./partials folder)
│   │
│   ├── public (Publicly accessible files, usually assets)
│   │   ├── **/* (Files copied from the ./src/public folder)
│   │
│   ├── system
│   │   ├── **/* (Files copied from the ./system folder)
│   │
│   ├── vendor
│   │   ├── **/* (Files copied from the ./vendor folder, usually Composer packages)
│   │
│   ├── .htaccess
│   ├── **/* (Files copied from the ./raw folder)
```

## Configuration

This starter repository comes with default configurations for various tools. However, you can customize these configurations according to your project requirements. Key configuration files include:

-   **configs/routes.php**: Routing configuration.
-   **configs/env.php**: Globally accessible constants for PHP.
-   **tsconfig.json**: TypeScript configuration file. Modify this file to adjust TypeScript compiler options.
-   **.prettierrc**: Prettier configuration file for code formatting. Modify this file to customize code formatting rules.
-   **vite.config.ts**: Contains configuration settings for Vite, such as plugins, build options, and server settings.
-   **tailwind.config.ts**: Configuration file for Tailwind CSS. Customize this file to adjust Tailwind CSS settings.
-   **postcss.config.cjs**: Configuration for PostCSS, which is used for processing CSS. Modify this file to include additional PostCSS plugins or settings.

## License

This project is licensed under the MIT license, see LICENSE.

## Contributing

Contributions are welcome! If you have any suggestions, improvements, or bug fixes, please feel free to open an issue or submit a pull request.

<table>
	<tr>
		<th>
			via Ko-Fi
		</th>
		<th>
			Buy me a coffee
		</th>
		<th>
			via PayPal
		</th>
	</tr>
	<tr>
		<td>
			<a href="https://ko-fi.com/Y8Y2ALMG" target="_blank">
				<img src="https://ko-fi.com/img/githubbutton_sm.svg" alt="ko-fi" width="174">
			</a>
		</td>
		<td>
			<a href="https://www.buymeacoffee.com/donnikitos" target="_blank">
				<img src="https://nititech.de/donate-buymeacoffee.png" alt="Buy Me A Coffee" width="174">
			</a>
		</td>
		<td>
			<a href="https://www.paypal.com/donate/?hosted_button_id=EPXZPRTR7JHDW" target="_blank">
				<img src="https://nititech.de/donate-paypal.png" alt="PayPal" width="174">
			</a>
		</td>
	</tr>
</table>

## Acknowledgments

Special thanks to the developers of Vite, Tailwind CSS, FastRoutes, and other tools used in this starter repository for their fantastic work.
