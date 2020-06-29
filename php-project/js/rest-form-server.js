class RestFormServer {

    constructor(){

        // rest bay game
        this._btnBay = document.getElementById('btnBay');
        this._nameInpValue = document.getElementById('nameInpValue');
        this._surnameInpValue = document.getElementById('surnameInpValue');
        this._emailInpValue = document.getElementById('emailInpValue');
        this._gameInpValue = document.getElementById('gameInpValue');
        this._labelName = document.getElementById('labelName');
        this._labelSurname = document.getElementById('labelSurname');
        this._labelEmail = document.getElementById('labelEmail');
        this._labelGame = document.getElementById('labelGame');
        this._formBuy = document.getElementById('formBuy');
        this._thankYouOrder = document.getElementById('thankYouOrder');

        //rest admin login

        this._admModalBtn = document.getElementById('admModalBtn');
        this._adnModalClose = document.getElementById('adnModalClose');
        this._loginAdmin = document.getElementById('loginAdmin');
        this._admName = document.getElementById('admName');
        this._admLogin = document.getElementById('admLogin');
        this._admPassword = document.getElementById('admPassword');
        this._admNameValue = document.getElementById('admNameValue');
        this._admLoginValue = document.getElementById('admLoginValue');
        this._admPasswordValue = document.getElementById('admPasswordValue');
        this._loginBtnAdm = document.getElementById('loginBtnAdm');
        this._formAdmLogin = document.getElementById('formAdmLogin');

    }

    serverRequest = async (URL, {...options}) => {
        let response = await fetch(URL, options);
        return await response.json();
    };

    formBayGame = () =>{

        this._btnBay.addEventListener("click", async (e) => {
            e.preventDefault();

            let nameInpValue = this._nameInpValue.value;
            let surnameInpValue = this._surnameInpValue.value;
            let emailInpValue = this._emailInpValue.value;
            let gameInpValue = this._gameInpValue.value;
            let gameInp = gameInpValue.replace(/ +/g, ' ').trim();
            let nameValid = valid(nameInpValue);
            let surnameValid = valid(surnameInpValue);
            let emailValid = validEmail(emailInpValue);
            let gameValid = validGameSelect(gameInp);

            if (!nameValid || !surnameValid || !emailValid || !gameValid){
                this._labelName.innerText = 'Error name is not correct';
                this._labelName.style.color = 'red';
                this._labelSurname.innerText = 'Error surname is not correct';
                this._labelSurname.style.color = 'red';
                this._labelEmail.innerText = 'Error email is not correct';
                this._labelEmail.style.color = 'red';
                this._labelGame.innerText = 'Error game is not correct';
                this._labelGame.style.color = 'red';
                return
            } else {
                const response = await this.serverRequest('server/user-data.php', {
                    method: 'POST',
                    body: new FormData(this._formBuy)
                });
                if (response.true_checkAddOrderGame === '1'){
                    this._thankYouOrder.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                }
            }
        })
    };

    formAdminLogin = () => {

        this._loginBtnAdm.addEventListener("click", async (e) => {
            e.preventDefault();

            let admNameValue = this._admNameValue.value;
            let admLoginValue = this._admLoginValue.value;
            let admPasswordValue = this._admPasswordValue.value;
            let admNameValid = valid(admNameValue);
            let admLoginValid = valid(admLoginValue);
            let admPasswordValid = valid(admPasswordValue);

            if( !admNameValid || !admLoginValid || !admPasswordValid ){
                this._admName.innerText = 'Error name is not correct';
                this._admName.style.color = 'red';
                this._admLogin.innerText = 'Error login is not correct';
                this._admLogin.style.color = 'red';
                this._admPassword.innerText = 'Error password is not correct';
                this._admPassword.style.color = 'red';
            } else {
                const response = await this.serverRequest('server/check-admin.php', {
                    method: 'POST',
                    body: new FormData(this._formAdmLogin)
                });
                console.log(response);
                if(response.true_admin === '1'){
                    location.href = '../admin-page/admin-page.php'
                } else {
                    console.log('error')
                }
            }
        })
    }


}