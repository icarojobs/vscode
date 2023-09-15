# vscode
The Tio Jobs .vscode custom settings

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
