# VSCODE SETTINGS
The Tio Jobs .vscode custom settings for MacOS

### CHANGING YOUR BASH
I'm using ZSH in MacOS, so, in my case, I need change my .zshrc like this:
```
export VSCODE_USER="$HOME/Library/Application\ Support/Code/User/"
alias setcode="rm -rf .vscode && git clone https://github.com/icarojobs/vscode .vscode && cp .vscode/keybindings.json $VSCODE_USER"
```

After that, save and reload your terminal using `source ~/.zshrc`

### APPLYING SETTINGS
Open your project using `code .` then type in your terminal:
```bash
setcode
```

Enjoy it!

### THE MOST IMPORTANT SHORTCUTS
 - Open 2 last recent files from history: `ctrl+shift+tab`
 - Open all recent files: `shift shift`
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