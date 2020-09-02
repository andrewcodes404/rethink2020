## startup for wp

### on setup

 `./gulpfile`
change this to your local url

``` js
function serve() {
    browserSync.init({
                proxy: "http://wp-startup.local/",
                notify: false,
                ...
```

/.vscode/settings.json

``` json
{
  "workbench.colorCustomizations": {
    "titleBar.activeForeground": "#fff",
    "titleBar.inactiveForeground": "#fff",
    "titleBar.activeBackground": "#ff34ab",
    "titleBar.inactiveBackground": "#af0060"
  }
}```
