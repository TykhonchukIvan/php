class Modal {
    constructor() {
        this._btnPost = document.getElementById('btnPost');
        this._btnGet = document.getElementById('btnGet');
        this._formPOST = document.getElementById('formPOST');
        this._formGET = document.getElementById('formGET');
    }
    castlingForm = () => {
        this._btnPost.addEventListener("click", (e)=>{
            e.preventDefault();
            this._btnPost.style.color = '#ff8600';
            this._btnGet.style.color = '#f5f5f5';
            this._formPOST.style.display = 'block';
            this._formGET.style.display = 'none';
        });
        this._btnGet.addEventListener("click", (e)=>{
            e.preventDefault();
            this._btnGet.style.color = '#ff8600';
            this._btnPost.style.color = '#f5f5f5';
            this._formPOST.style.display = 'none';
            this._formGET.style.display = 'block';
        });
    }
}

const init = () => {
    const modal = new Modal();
    modal.castlingForm()
};
init();

