.PHONY:	default
default:
	@echo "Welcome to Tio Jobs setup script!"

.PHONY:	setup-vscode-win
setup-vscode-win:	clean-vscode-win clone-repository copy-vscode-keybindings-win
	@echo "--> Your VSCODE IDE is ready to use now!"

.PHONY:	clean-vscode-win
clean-vscode-win:
	@echo "--> Configuring your boring VS-CODE..."
	@rm -rf .vscode

.PHONY:	clone-repository
clone-repository:
	@echo "--> Clonning https://github.com/icarojobs/vscode repository to .vscode/"
	@git clone https://github.com/icarojobs/vscode .vscode

.PHONY:	copy-vscode-keybindings-win
copy-vscode-keybindings-win:
	@echo "--> Copying .vscode/keybindings-win.json to $(VSCODE_CONFIG_PATH)"
	@cp .vscode/keybindings-win.json $(VSCODE_CONFIG_PATH)
	@mv $(VSCODE_CONFIG_PATH)/keybindings-win.json $(VSCODE_CONFIG_PATH)/keybindings.json