class RestFormServer {

    constructor(){

        //add-game

        this._formAddGame = document.getElementById('formAddGame');
        this._addGameBtn = document.getElementById('addGameBtn');
        this._pathPictureValue = document.getElementById('pathPictureValue');
        this._gameNameValue = document.getElementById('gameNameValue');
        this._numberKeysValue = document.getElementById('numberKeysValue');
        this._gameDescriptionsValue = document.getElementById('gameDescriptionsValue');
        this._pathPictureLabel = document.getElementById('pathPictureLabel');
        this._gameNameLabel = document.getElementById('gameNameLabel');
        this._numberKeysLabel = document.getElementById('numberKeysLabel');
        this._gameDescriptionsLabel = document.getElementById('gameDescriptionsLabel');
        this._modalRegisteredGame = document.getElementById('modalRegisteredGame');
        this._modalRegisteredGameClose = document.getElementById('modalRegisteredGameClose');
        this._registeredGameText = document.getElementById('registeredGameText');
        this._registeredGameTextTwo = document.getElementById('registeredGameTextTwo');

        //add-admin

        this._formAddAdmin = document.getElementById('formAddAdmin');
        this._nameAddAdminValue = document.getElementById('nameAddAdminValue');
        this._surnameAddAdminValue = document.getElementById('surnameAddAdminValue');
        this._loginAddAdminValue = document.getElementById('loginAddAdminValue');
        this._emailAddAdminValue = document.getElementById('emailAddAdminValue');
        this._passwordAddAdminValue = document.getElementById('passwordAddAdminValue');
        this._formAddAdminBtn = document.getElementById('formAddAdminBtn');
        this._nameAddAdmin = document.getElementById('nameAddAdmin');
        this._surnameAddAdmin = document.getElementById('surnameAddAdmin');
        this._loginAddAdmin = document.getElementById('loginAddAdmin');
        this._emailAddAdmin = document.getElementById('emailAddAdmin');
        this._passwordAddAdmin = document.getElementById('passwordAddAdmin');
        this._modalRegisteredAdmin = document.getElementById('modalRegisteredAdmin');
        this._modalRegisteredAdminClose = document.getElementById('modalRegisteredAdminClose');
        this._registeredAdminText = document.getElementById('registeredAdminText');
        this._registeredAdminTextTwo = document.getElementById('registeredAdminTextTwo');

    }

    serverRequest = async (URL, {...options}) => {
        let response = await fetch(URL, options);
        return await response.json();
    };


    restFormAddGame = () => {
        this._addGameBtn.addEventListener("click",  async (e) => {
            e.preventDefault();

            let pathPictureValue = this._pathPictureValue.value;
            let gameNameValue = this._gameNameValue.value;
            let numberKeysValue = this._numberKeysValue.value;
            let gameDescriptionsValue = this._gameDescriptionsValue.value;
            let pictureValid = validPath(pathPictureValue);
            let gameValid = gameName(gameNameValue);
            let keysValid = validGameKey(numberKeysValue);
            let descriptionsValid = validGameDescriptions(gameDescriptionsValue);

            if (!pictureValid || !gameValid || !keysValid || !descriptionsValid) {
                this._pathPictureLabel.innerText = 'Error path to picture is correct';
                this._pathPictureLabel.style.color = 'red';
                this._gameNameLabel.innerText = 'Error game name is correct';
                this._gameNameLabel.style.color = 'red';
                this._numberKeysLabel.innerText = 'Error number of keys is correct';
                this._numberKeysLabel.style.color = 'red';
                this._gameDescriptionsLabel.innerText = 'Error game descriptions is correct';
                this._gameDescriptionsLabel.style.color = 'red';
            } else {
                this._pathPictureLabel.innerText = 'Error path to picture is not correct';
                this._pathPictureLabel.style.color = 'green';
                this._gameNameLabel.innerText = 'Error game name is not correct';
                this._gameNameLabel.style.color = 'green';
                this._numberKeysLabel.innerText = 'Error number of keys is not correct';
                this._numberKeysLabel.style.color = 'green';
                this._gameDescriptionsLabel.innerText = 'Error game descriptions is not correct';
                this._gameDescriptionsLabel.style.color = 'green';

                const response = await this.serverRequest('/server/add-game.php', {
                    method: 'POST',
                    body: new FormData(this._formAddGame)
                });

                if(response.true_addGame === '1'){
                    this._modalRegisteredGame.style.display = 'block';
                } else {
                    this._modalRegisteredGame.style.display = 'block';
                    this._registeredGameText.innerText ='Error';
                    this._registeredGameText.style.color = 'red';
                    this._registeredGameTextTwo.innerText ='Game has not been successfully added.';
                    this._registeredGameTextTwo.style.color = 'red';

                }
            }
        });
        this._modalRegisteredGameClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._modalRegisteredGame.style.display = 'none';
        })
    };

    restFormAddAdmin = () => {

        this._formAddAdminBtn.addEventListener("click", async (e) => {
            e.preventDefault();

            let nameAddAdminValue = this._nameAddAdminValue.value;
            let surnameAddAdminValue = this._surnameAddAdminValue.value;
            let loginAddAdminValue = this._loginAddAdminValue.value;
            let emailAddAdminValue = this._emailAddAdminValue.value;
            let passwordAddAdminValue = this._passwordAddAdminValue.value;
            let nameValid = valid(nameAddAdminValue);
            let surnameValid = valid(surnameAddAdminValue);
            let loginValid = valid(loginAddAdminValue);
            let emailValid = validEmail(emailAddAdminValue);
            let passwordValid = valid(passwordAddAdminValue);

            if (!nameValid || !surnameValid || !loginValid || !emailValid || !passwordValid) {
                this._nameAddAdmin.innerText = 'Error name is not correct';
                this._nameAddAdmin.style.color = 'red';
                this._surnameAddAdmin.innerText = 'Error surname is not correct';
                this._surnameAddAdmin.style.color = 'red';
                this._loginAddAdmin.innerText = 'Error login is not correct';
                this._loginAddAdmin.style.color = 'red';
                this._emailAddAdmin.innerText = 'Error email is not correct';
                this._emailAddAdmin.style.color = 'red';
                this._passwordAddAdmin.innerText = 'Error password is not correct';
                this._passwordAddAdmin.style.color = 'red';
                return
            } else {
                this._nameAddAdmin.innerText = 'Name is correct';
                this._nameAddAdmin.style.color = 'green';
                this._surnameAddAdmin.innerText = 'Surname is correct';
                this._surnameAddAdmin.style.color = 'green';
                this._loginAddAdmin.innerText = 'Login is correct';
                this._loginAddAdmin.style.color = 'green';
                this._emailAddAdmin.innerText = 'Email is correct';
                this._emailAddAdmin.style.color = 'green';
                this._passwordAddAdmin.innerText = 'Password is correct';
                this._passwordAddAdmin.style.color = 'green';

                const response = await this.serverRequest('/server/add-admin.php', {
                    method: 'POST',
                    body: new FormData(this._formAddAdmin)
                });

                if(response.true_registered === '1'){
                    this._modalRegisteredAdmin.style.display = 'block';
                } else {
                    this._registeredAdminText.innerText = 'Error';
                    this._registeredAdminText.style.color = 'red';
                    this._registeredAdminTextTwo.innerText = 'Admin has not been successfully added.';
                    this._registeredAdminTextTwo.style.color = 'red';
                }
            }
        });
        this._modalRegisteredAdminClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._modalRegisteredAdmin.style.display = 'none';
        })
    };
}