# VSCODE SETTINGS
The Tio Jobs .vscode custom settings for MacOS

### SYSTEM REQUIREMENTS
 - PHP 8.x on your Operating System (out of Docker)

### CHANGING YOUR BASH
I'm using ZSH in MacOS, so, in my case, I need change my .zshrc like this:
```
export VSCODE_USER="$HOME/Library/Application\ Support/Code/User/"
alias setcode="rm -rf .vscode && git clone https://github.com/icarojobs/vscode .vscode && cp .vscode/keybindings.json $VSCODE_USER && php .vscode/extensions/install.php"
alias setenv="php .vscode/extensions/DotEnv.php"
```

After that, save and reload your terminal using `source ~/.zshrc`

### APPLYING SETTINGS
After your project basic setup (composer, .env, etc), then open your project using `code .` then type in your terminal:
```bash
setcode
```

### APPLYING DOCKER SAIL .ENV SETTINGS
If your project was an `.env` file, you can use the follwing command to setup the main settings:
```bash
setenv
```

### APPLYING ALL SETTINGS
```bash
setcode && setenv
```

### INSTALLING TIO JOBS EXTENSIONS
To install my all extensions, just type this on terminal, in your root project folder (after `setcode` command):
```bash
php .vscode/extensions/install.php
```


### UPDATING EXTENSIONS LIST
```bash
code --list-extensions >> .vscode/extensions/vs_code_extensions_list.txt
```

### INSTALLING CODE QUALITY TOOLS (SAIL)
```bash
sail composer require laravel/pint --dev && sail composer require nunomaduro/larastan:^2.0 --dev
```

### RUNNING CODE FORMATTER
```bash
sail bin pint -v
sail bin phpstan analyse --memory-limit=2G
```

### THE MOST IMPORTANT SHORTCUTS
 - Open 2 last recent files from history: `ctrl+shift+tab`
 - Open all recent files: `shift shift`
 - Format document: `ctrl+alt+l`
 - Open other project: `ctrl+q`
 - Find and replace: `ctrl+r`
 - Find in current file: `cmd+f`
 - Find in whole project: `cmd+shift+f`
 - Increase zoom in workspace: `cmd+=`
 - Decrease zoom in workspace: `cmd+-`
 - Increase/Decrease zoom in current file: `cmd+mouse scrool up/down`
 - Open/Close Terminal: `cmd+t`
 - Clear terminal: `ctrl+l`
 - Create new terminal: `ctrl+cmd+t`

### THE MOST IMPORTANT SNIPPETS
 - `dect + tab` to declare strict types
 - `tclass + tab` to create class structure
 - `pubf + tab` to create public function structure