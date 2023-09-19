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
alias sethooks="sail bin captainhook install -f -s"

alias stan="sail bin phpstan analyse --memory-limit=2G"
alias pint="sail bin pint -v" 
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

### APPLYING CAPTAINHOOKS (PRECOMMIT, ETC)
```bash
sethooks
```

### APPLYING ALL SETTINGS
```bash
setcode && setenv && sethooks
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
sail composer require laravel/pint --dev && sail composer require nunomaduro/larastan:^2.0 --dev && sail composer require --dev captainhook/captainhook
```

### RUNNING CODE FORMATTER
```bash
sail bin pint -v
sail bin phpstan analyse --memory-limit=2G
```

### GETTING LARASTAN/PHPSTAN IGNORED ERRORS
```bash
stan --generate-baseline
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


### ALL .ZSHRC ALIASES OF TIO JOBS
```bash
alias sail="$HOME/Scripts/sail"

# git aliases
alias gc="git checkout"
alias gm="git merge"
alias gl="git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"
alias gs="git status"
alias gp="git push"
alias gpu="git pull"
alias gno="git reset --hard HEAD"
alias glog='git log --oneline --decorate --graph --all'
alias wip="git add . && git commit -m '🚧: work in progress...' && clear"

# Jobs Script
alias jobs="`pwd`/./jobs"

# laravel
alias sup="sail up --force-recreate -d"
alias sd="sail down"
alias sa="sail artisan"
alias sac="clear && sail art config:cache"
alias sopa="clear && sail art optimize:clear"
alias st="clear && sail artisan test"
alias stp="clear && sail artisan test --parallel"
alias phpunit="vendor/bin/phpunit"
alias pest="./vendor/bin/pest"
alias play="sail art play"

# Show/hide hidden files in Finder
alias show="defaults write com.apple.finder AppleShowAllFiles -bool true && killall Finder"
alias hide="defaults write com.apple.finder AppleShowAllFiles -bool false && killall Finder"


# IP addresses
alias ip="curl -s https://api.ipify.org/\?format\=json"
alias ip6="curl -s https://api64.ipify.org\?format\=json"
alias localip="ifconfig -a | grep -o 'inet6\? \(addr:\)\?\s\?\(\(\([0-9]\+\.\)\{3\}[0-9]\+\)\|[a-fA-F0-9:]\+\)' | awk '{ sub(/inet6? (addr:)? ?/, \"\"); print }'"

# NODE JS ALIASES
alias tsc="npm run tsc"

# ANDROID ALIASES
alias emulator="scrcpy"

# NeoVIM
alias vim=nvim

# KOOL
alias kr="kool run"
alias kapp="kool exec app php artisan"
alias kexec="kool exec"

export VSCODE_USER="$HOME/Library/Application\ Support/Code/User/"
alias setcode="rm -rf .vscode && git clone https://github.com/icarojobs/vscode .vscode && cp .vscode/keybindings.json $VSCODE_USER && php .vscode/extensions/install.php"
alias setenv="php .vscode/extensions/DotEnv.php"

alias stan="sail bin phpstan analyse --memory-limit=2G"
alias pint="sail bin pint -v"

export ANDROID_HOME=$HOME/Library/Android/sdk
export PATH=$PATH:$ANDROID_HOME/build-tools/33.0.1
export PATH=$PATH:$ANDROID_HOME/emulator
export PATH=$PATH:$ANDROID_HOME/platform-tools

# export PATH=$PATH:/Applications/XAMPP/bin
export PATH="/opt/homebrew/opt/php@8.2/bin:$PATH"
export PATH="/opt/homebrew/opt/php@8.2/sbin:$PATH"
autoload -U compinit; compinit
autoload -U compinit; compinit

# bun completions
[ -s "/Users/tiojobs/.bun/_bun" ] && source "/Users/tiojobs/.bun/_bun"

# bun
export BUN_INSTALL="$HOME/.bun"
export PATH="$BUN_INSTALL/bin:$PATH"
```