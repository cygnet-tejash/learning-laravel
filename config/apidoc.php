<?php

return [

    /*
     * The output path for the generated documentation.
     */
    'output' => 'public/docs',

    /*
     * The router to be used (Laravel or Dingo).
     */
    'router' => 'laravel',

    /*
     * Generate a Postman collection in addition to HTML docs.
     */
    'postman' => true,

    /*
     * The routes for which documentation should be generated.
     * Each group contains rules defining which routes should be included ('match', 'include' and 'exclude' sections)
     * and rules which should be applied to them ('apply' section).
     */
    'routes' => [
        [
            /*
             * Specify conditions to determine what routes will be parsed in this group.
             * A route must fulfill ALL conditions to pass.
             */
            'match' => [

                /*
                 * Match only routes whose domains match this pattern (use * as a wildcard to match any characters).
                 */
                'domains' => [
                    '*',
                    // 'domain1.*',
                ],

                /*
                 * Match only routes whose paths match this pattern (use * as a wildcard to match any characters).
                 */
                'prefixes' => [
                    // '*',
                    'api/*',
                ],

                /*
                 * Match only routes registered under this version. This option is ignored for Laravel router.
                 * Note that wildcards are not supported.
                 */
                'versions' => [
                    // 'v1',
                ],
            ],

            /*
             * Include these routes when generating documentation,
             * even if they did not match the rules above.
             * Note that the route must be referenced by name here (wildcards are supported).
             */
            'include' => [
                // 'users.index', 'healthcheck*'
            ],

            /*
             * Exclude these routes when generating documentation,
             * even if they matched the rules above.
             * Note that the route must be referenced by name here (wildcards are supported).
             */
            'exclude' => [
                '*.create', '*.edit'
            ],

            /*
             * Specify rules to be applied to all the routes in this group when generating documentation
             */
            'apply' => [
                /*
                 * Specify headers to be added to the example requests
                 */
                'headers' => [
                    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU',
                    // 'Api-Version' => 'v2',
                ],

                /*
                 * If no @response or @transformer declarations are found for the route,
                 * we'll try to get a sample response by attempting an API call.
                 * Configure the settings for the API call here,
                 */
                'response_calls' => [
                    /*
                     * API calls will be made only for routes in this group matching these HTTP methods (GET, POST, etc).
                     * List the methods here or use '*' to mean all methods. Leave empty to disable API calls.
                     */
                    'methods' => ['*'],

                    /*
                     * For URLs which have parameters (/users/{user}, /orders/{id?}),
                     * specify what values the parameters should be replaced with.
                     * Note that you must specify the full parameter, including curly brackets and question marks if any.
                     */
                    'bindings' => [
                        '{project}' => 15
                    ],

                    /*
                     * Environment variables which should be set for the API call.
                     * This is a good place to ensure that notifications, emails
                     * and other external services are not triggered during the documentation API calls
                     */
                    'env' => [
                        'APP_ENV' => 'documentation',
                        'APP_DEBUG' => true,
                        // 'env_var' => 'value',
                    ],

                    /*
                     * Headers which should be sent with the API call.
                     */
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                        // 'key' => 'value',
                    ],

                    /*
                     * Query parameters which should be sent with the API call.
                     */
                    'query' => [
                        // 'key' => 'value',
                    ],

                    /*
                     * Body parameters which should be sent with the API call.
                     */
                    'body' => [
                        // 'key' => 'value',
                    ],
                ],
            ],
        ],
    ],

    /*
     * Custom logo path. Will be copied during generate command. Set this to false to use the default logo.
     *
     * Change to an absolute path to use your custom logo. For example:
     * 'logo' => resource_path('views') . '/api/logo.png'
     *
     * If you want to use this, please be aware of the following rules:
     * - size: 230 x 52
     */
    'logo' => __DIR__.'/../public/img/logo.png',
];
