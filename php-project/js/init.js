function init() {

    const restFormServer = new RestFormServer();
    restFormServer.formBayGame();
    restFormServer.formAdminLogin();

    const showModalWindow = new ShowModalWindow();
    showModalWindow.showModal();
    showModalWindow.showBtnBurger();


    const drawingGameList = new DrawingGameList();
    drawingGameList.show()



}


init();