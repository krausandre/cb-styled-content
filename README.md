# cb-styled-content
This is a test to refactor TYPO3 core content elements as content blocks.

## Developing

There is a ddev setup ready to use. Ensure [ddev](https://github.com/ddev/ddev)
is installed on your machine. Then run:

```
ddev start
ddev composer install
touch .Build/public/FIRST_INSTALL
ddev launch
```