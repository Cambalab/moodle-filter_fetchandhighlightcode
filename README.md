# moodle-filter_fetchandhighlightcode

This is a filter plugin based on Sharpchi's syntaxhighlighter, wich uses a 3rd party Javascript module called [highlight.js](https://highlightjs.org/) to display code in a pretty colorful way.   

We added the functionality to, instead of giving the code to highlight, you can provide the URL of a plain-text code, from a github or gitlab repo, maybe, and it will be fetched and displayed beautifully.

Once activated, you just need to wrap your URL in: `<pre><code>URL</code></pre>` tags (You will need to activate html mode in Atto), or use the MarkDown style of using three back-ticks to wrap code (\`\`\`URL\`\`\`) and the javascript will style it.

The settings allow you to choose which styling to use, and to enable the disabled by default fetch code from URL functionality.

## Install
1.  Unzip
2.  Copy contents to `/filter/fetchandhighlightcode`
3.  Activate from Manage filters.

## Change requests
Since this is a 3rd party plugin, any change requests that relate to the styles and features of the highlighting should be directed to the [original plugin author](https://github.com/isagalaev/highlight.js/issues).

This plugin is [based on the work of Sharpchi](https://github.com/sharpchi/moodle-filter_syntaxhighlighter), thank you for your work!