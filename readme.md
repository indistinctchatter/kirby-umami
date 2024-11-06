# Kirby umami
Simple plugin providing umami iframe panel view to Kirby panel and frontend snippet.

![CleanShot 2021-11-04 at 17 53 43](https://user-images.githubusercontent.com/4954323/140384031-efdf83d7-06a3-4ce3-a60b-3827fe63fd9c.png)
## Installation
`composer require  floriankarsten/kirby-umami`
or download from releases

## How to use
1. Create a shared link https://umami.io/docs/shared-links
1. Set `indistinctchatter.umami.sharedLink` in config.php
    ```php
    // config/config.php
    'indistinctchatter.umami' => [
        // Required
        'sharedLink' => 'https://cloud.umami.is/share/AneFmglgnReC20At/example.com',
        // Optional: The value that will be set in data-domain attribute of <script> tag.
        'domain' => 'test.com', // Defaults to $site->url()
        // Optional: To use a self-hosted umami instance
        // 'scriptHost' => 'https://umami.example.com',
        // Optional: To use umami script extensions
        // 'scriptName' => 'umami.outbound-links.exclusions'
    ];
    ```
1. Add the following snippet inside your site's `<head>` tag. Note that this will not generate any output for logged in users or when Kirby is in debug mode.
    ```php
    <?php snippet('umami'); ?>
    ```

This plugin wouldn't happen without [@floriankarsten](https://github.com/floriankarsten). This is a copypaste copycat of that plugin, thanks Florian Karsten! 
