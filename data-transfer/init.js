class Modal {
    constructor() {
        this._btnPost = document.getElementById('btnPost');
        this._btnGet = document.getElementById('btnGet');
        this._formPOST = document.getElementById('formPOST');
        this._formGET = document.getElementById('formGET');
        this._btnCommentPost = document.getElementById('btnCommentPost');
        this._commentPOST = document.getElementById('commentPOST');
        this._btnCommentGet = document.getElementById('btnCommentGet');
        this._commentGET = document.getElementById('commentGET');
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
        this._btnCommentPost.addEventListener("click", (e)=>{
            e.preventDefault();
            this._commentPOST.style.display ='block';
            this._commentGET.style.display ='none';
            this._btnCommentPost.style.color = '#ff8600';
            this._btnCommentGet.style.color = '#f5f5f5';
        });
        this._btnCommentGet.addEventListener("click", (e)=>{
            e.preventDefault();
            this._commentGET.style.display='block';
            this._commentPOST.style.display='none';
            this._btnCommentGet.style.color = '#ff8600';
            this._btnCommentPost.style.color = '#f5f5f5';
        });
    }
}

const init = () => {
    const modal = new Modal();
    modal.castlingForm()
};
init();