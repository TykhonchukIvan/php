class ShowModalWindow {

    constructor(){
        this._createAccountModalBtn = document.getElementById('createAccountModalBtn');
        this._admModalBtn = document.getElementById('admModalBtn');
        this._btnSelectGame = document.getElementById('btnSelectGame');

        this._createAccountWrapper = document.getElementById('createAccountWrapper');
        this._loginAdmin = document.getElementById('loginAdmin');
        this._selectGameList = document.getElementById('selectGameList');

        this._selectGameListClose = document.getElementById('selectGameListClose');
        this._adnModalClose = document.getElementById('adnModalClose');
        this._createAccountClose = document.getElementById('createAccountClose');

        this._thankYouOrder = document.getElementById('thankYouOrder');
        this._thankYouOrderClose = document.getElementById('thankYouOrderClose');
        this._thankYouOrderBtn = document.getElementById('thankYouOrderBtn');

        this._btnBurger = document.getElementById('btnBurger');
        this._mobileMenu = document.getElementById('mobileMenu');
        this._burgerMenu = document.getElementById('burgerMenu');
        this._menuWrapper = document.getElementById('menuWrapper');
        this._mobileMenuClose = document.getElementById('mobileMenuClose');

    }


    showModal = () => {

        this._createAccountModalBtn.addEventListener("click",(e)=>{
            e.preventDefault();
            this._createAccountWrapper.style.display = 'block';
        });

        this._admModalBtn.addEventListener("click",(e)=>{
            e.preventDefault();
            this._loginAdmin.style.display = 'block';
        });

        this._btnSelectGame.addEventListener("click",(e)=>{
            e.preventDefault();
            this._selectGameList.style.display = 'block';
        });

        this._selectGameListClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._selectGameList.style.display = 'none';
        });

        this._adnModalClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._loginAdmin.style.display = 'none';
        });

        this._createAccountClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._createAccountWrapper.style.display = 'none';
        });

        this._thankYouOrderClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._thankYouOrder.style.display = 'none';
            document.body.style.overflow = 'visible';
        });

        this._thankYouOrderBtn.addEventListener("click", (e)=>{
            e.preventDefault();
            this._thankYouOrder.style.display = 'none';
            document.body.style.overflow = 'visible';
        })

    };

    showBtnBurger = () =>{
        this._btnBurger.addEventListener("click", (e)=>{
            e.preventDefault();
            this._btnBurger.classList.toggle('btn-burger_active');
            this._burgerMenu.classList.toggle('burger-menu_active');
        });
        this._mobileMenu.addEventListener("click", (e)=>{
            e.preventDefault();
            this._menuWrapper.style.display = 'block';
        });
        this._mobileMenuClose.addEventListener("click", (e)=>{
            e.preventDefault();
            this._menuWrapper.style.display = 'none';
        })
    }
}