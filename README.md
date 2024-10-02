
```
laravel-task-Employee-Management
├─ .editorconfig
├─ .gitattributes
├─ .gitignore
├─ app
│  ├─ Console
│  │  └─ Kernel.php
│  ├─ Exceptions
│  │  └─ Handler.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Controller.php
│  │  │  ├─ EmployeeController.php
│  │  │  └─ ManagerAuthController.php
│  │  ├─ Kernel.php
│  │  └─ Middleware
│  │     ├─ Authenticate.php
│  │     ├─ EncryptCookies.php
│  │     ├─ PreventRequestsDuringMaintenance.php
│  │     ├─ RedirectIfAuthenticated.php
│  │     ├─ TrimStrings.php
│  │     ├─ TrustHosts.php
│  │     ├─ TrustProxies.php
│  │     ├─ ValidateSignature.php
│  │     └─ VerifyCsrfToken.php
│  ├─ Models
│  │  ├─ Employee.php
│  │  ├─ Manager.php
│  │  └─ User.php
│  └─ Providers
│     ├─ AppServiceProvider.php
│     ├─ AuthServiceProvider.php
│     ├─ BroadcastServiceProvider.php
│     ├─ EventServiceProvider.php
│     └─ RouteServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  └─ cache
│     ├─ .gitignore
│     ├─ packages.php
│     └─ services.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ broadcasting.php
│  ├─ cache.php
│  ├─ cors.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ hashing.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  ├─ session.php
│  └─ view.php
├─ database
│  ├─ .gitignore
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 2014_10_12_000000_create_users_table.php
│  │  ├─ 2014_10_12_100000_create_password_reset_tokens_table.php
│  │  ├─ 2019_08_19_000000_create_failed_jobs_table.php
│  │  ├─ 2019_12_14_000001_create_personal_access_tokens_table.php
│  │  ├─ 2024_10_02_103927_create_managers_table.php
│  │  └─ 2024_10_02_103934_create_employees_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ manager
│     │  ├─ auth
│     │  │  ├─ login.blade.php
│     │  │  └─ register.blade.php
│     │  ├─ dashboard.blade.php
│     │  └─ employees
│     │     ├─ create.blade.php
│     │     └─ edit.blade.php
│     └─ welcome.blade.php
├─ routes
│  ├─ api.php
│  ├─ channels.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ .gitignore
│  │  └─ public
│  │     ├─ .gitignore
│  │     └─ employee_images
│  │        ├─ 3GI4JDiA6PhTrsvlDqzZ0YJy2poKZoNw5LjmfD9h.jpg
│  │        ├─ 5PS9pe2CsJpU57ngUVMeDAY1CjOkIDL6YJECTgRb.jpg
│  │        ├─ FOOQ1jkfdDqOoXhLjO2prEv8ZdZJHcQym0ba1Y4O.jpg
│  │        ├─ GnODlqpjxLnyUIUuwi78UbbT1LKc8eJJPZKYvPst.jpg
│  │        ├─ US7arjtj4EDRLNfTww3a87HLA4jJmyERLZUmpqVs.jpg
│  │        └─ z8yK7Mid9QoJEK5gg1KyLX593NzKtTphgdwsMYFt.jpg
│  ├─ framework
│  │  ├─ .gitignore
│  │  ├─ cache
│  │  │  ├─ .gitignore
│  │  │  └─ data
│  │  │     └─ .gitignore
│  │  ├─ sessions
│  │  │  ├─ .gitignore
│  │  │  ├─ C7L2FzGMmRJDscFvnv2aSWW2mmPZV6komThxYotL
│  │  │  └─ QaFbUr8BAOgENFQCxBDNdsccQ68RBMPnhomLJF0O
│  │  ├─ testing
│  │  │  └─ .gitignore
│  │  └─ views
│  │     ├─ .gitignore
│  │     ├─ 6fc436f13291c188dd6cc2a8c621b95f.php
│  │     ├─ 9b1039c547ee72535293994691a58675.php
│  │     ├─ a0ce6da114f4e1b23eec161c966a34f3.php
│  │     ├─ bba34721e1e7da8f694b5d437da36201.php
│  │     ├─ c59ebb54486094a5732196244fb5b139.php
│  │     ├─ f03fff95a9fc3c145ad6ff8b43cd3ea1.php
│  │     └─ f82bd19e5fdc4d77d9a646afa68ab0da.php
│  └─ logs
│     ├─ .gitignore
│     └─ laravel.log
├─ tests
│  ├─ CreatesApplication.php
│  ├─ Feature
│  │  └─ ExampleTest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js

```
