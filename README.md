# Laravel Project Analysers
A base set of analysers extending upon [Laravel Enlightn](https://github.com/enlightn/enlightn) to enforce consistency, security and reliability.

## Setup

Add the following to your `composer.json` file.
```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/JumpTwentyFour/project-analysers"
        }
    ],
```

Then run the following commands:-

`composer require jumptwentyfour/project-analysers`

`php artisan vendor:publish --tag=enlightn`

Inside of `config/enlightn.php` add the following path to the `analyzer_paths` key.        

`JumpTwentyFour\\ProjectAnalyzers\\Analyzers' => base_path('vendor/jumptwentyfour/project-analysers/src/Analyzers')`

### Custom Analysers

#### Reliability

##### Node Version Analyser
An analyser to check whether an .nvrmc file exists within the project to enforce consistency of node versions.

##### Invokable Controllers Analyser
An analyser to check whether all controllers adhere to being single action invokable controllers.

In order to ignore controllers for this rule add to `config/enlightn.php` 

```
'invokable' => [
    'ignore_controllers' => [
        <Your-Controller>::class
    ]
]
```

#### Security

##### Tinker Analyzer
An analyser to check if Laravel Tinker is installed. We should ideally remove
this due to the risk of it being installed in production by mistake, even when present in dev-dependencies.
