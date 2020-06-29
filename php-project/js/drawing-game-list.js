class DrawingGameList {

    constructor() {
        this._sectionOneRight = document.getElementById('sectionOneRight');
        this._gameInpValue = document.getElementById('gameInpValue');

        this._gameOne = document.getElementById('gameOne');
        this._gameTwo = document.getElementById('gameTwo');
        this._gameThree = document.getElementById('gameThree');
        this._gameFour = document.getElementById('gameFour');
        this._gameFive = document.getElementById('gameFive');

    }

    createDiv = array => {
        let arr = [];

        array.forEach(object => {
            const div = document.createElement('div');
            object.id && (div.id = object.id);
            object.class && (div.classList.add(object.class));

            arr.push(div);
        });

        return arr;
    };

    createImage = array => {
        let arr = [];

        array.forEach(object => {
            const img = document.createElement('img');
            object.id && (img.id = object.id);
            object.src && (img.src = object.src);
            object.class && (img.classList.add(object.class));

            arr.push(img);
        });

        return arr;
    };

    serverRequest = async (URL, {...options}) => {
        let response = await fetch(URL, options);
        return await response.json();
    };

    getGameList = async () => await this.serverRequest('server/select-game-db-for-front-page.php', {method: 'GET',});

    show = () => {

        this.getGameList().then(
            result => {

                let arr = [];

                let eml;

                for (eml in result) {
                    arr.push(result[eml].reverse());
                }

                const listGamesSection = [
                    {class: "list-games-section"},
                    {class: "list-games-section"},
                    {class: "list-games-section"}
                ];

                const gameSectionOne = [
                    {class: "game-section"},
                    {class: "game-section"},
                    {class: "game-section"}
                ];

                const gameSectionTwo = [
                    {class: "game-section"},
                    {class: "game-section"},
                    {class: "game-section"}
                ];

                const gameSectionThree = [
                    {class: "game-section"},
                    {class: "game-section"},
                    {class: "game-section"}
                ];

                const gameImageOne = [
                    {src: arr[1][0]},
                ];
                const gameImageTwo = [
                    {src: arr[1][1]},
                ];
                const gameImageThree = [
                    {src: arr[1][2]},
                ];
                const gameImageFour = [
                    {src: arr[1][3]},
                ];
                const gameImageFive = [
                    {src: arr[1][4]},
                ];
                const gameImageSix = [
                    {src: arr[1][5]},
                ];
                const gameImageSeven = [
                    {src: arr[1][6]},
                ];
                const gameImageEight = [
                    {src: arr[1][7]},
                ];
                const gameImageNine = [
                    {src: arr[1][8]},
                ];

                const gameSectionBtnOne = [
                    {class: "game-section__btn", id: "gameSectionBtnOne"}
                ];

                const gameSectionBtnTwo = [
                    {class: "game-section__btn", id: "gameSectionBtnTwo"}
                ];

                const gameSectionBtnThree = [
                    {class: "game-section__btn", id: "gameSectionBtnThree"}
                ];

                const gameSectionBtnOFour = [
                    {class: "game-section__btn", id: "gameSectionBtnFour"}
                ];

                const gameSectionBtnFive = [
                    {class: "game-section__btn", id: "gameSectionBtnFive"}
                ];

                const gameSectionBtnSix = [
                    {class: "game-section__btn", id: "gameSectionBtnSix"}
                ];

                const gameSectionBtnSeven = [
                    {class: "game-section__btn", id: "gameSectionBtnSeven"}
                ];

                const gameSectionBtnEight = [
                    {class: "game-section__btn", id: "gameSectionBtnEight"}
                ];

                const gameSectionBtnNine = [
                    {class: "game-section__btn", id: "gameSectionBtnNine"}
                ];


                const oneGameSectionBtn = this.createDiv(gameSectionBtnOne);
                const twoGameSectionBtn = this.createDiv(gameSectionBtnTwo);
                const threeGameSectionBtn = this.createDiv(gameSectionBtnThree);
                const fourGameSectionBtn = this.createDiv(gameSectionBtnOFour);
                const fiveGameSectionBtn = this.createDiv(gameSectionBtnFive);
                const sixGameSectionBtn = this.createDiv(gameSectionBtnSix);
                const sevenGameSectionBtn = this.createDiv(gameSectionBtnSeven);
                const eightGameSectionBtn = this.createDiv(gameSectionBtnEight);
                const nineGameSectionBtn = this.createDiv(gameSectionBtnNine);

                const nineGameImage = this.createImage(gameImageNine);
                const eightGameImage = this.createImage(gameImageEight);
                const sevenGameImage = this.createImage(gameImageSeven);
                const sixGameImage = this.createImage(gameImageSix);
                const fiveGameImage = this.createImage(gameImageFive);
                const fourGameImage = this.createImage(gameImageFour);
                const threeGameImage = this.createImage(gameImageThree);
                const twoGameImage = this.createImage(gameImageTwo);
                const oneGameImage = this.createImage(gameImageOne);
                const gamesSectionList = this.createDiv(listGamesSection);
                const oneSectionGame = this.createDiv(gameSectionOne);
                const twoSectionGame = this.createDiv(gameSectionTwo);
                const threeSectionGame = this.createDiv(gameSectionThree);

                threeSectionGame[2].append(...nineGameImage);
                threeSectionGame[1].append(...eightGameImage);
                threeSectionGame[0].append(...sevenGameImage);
                twoSectionGame[2].append(...sixGameImage);
                twoSectionGame[1].append(...fiveGameImage);
                twoSectionGame[0].append(...fourGameImage);
                oneSectionGame[2].append(...threeGameImage);
                oneSectionGame[1].append(...twoGameImage);
                oneSectionGame[0].append(...oneGameImage);

                threeSectionGame[2].append(...nineGameSectionBtn);
                threeSectionGame[1].append(...eightGameSectionBtn);
                threeSectionGame[0].append(...sevenGameSectionBtn);
                twoSectionGame[2].append(...sixGameSectionBtn);
                twoSectionGame[1].append(...fiveGameSectionBtn);
                twoSectionGame[0].append(...fourGameSectionBtn);
                oneSectionGame[2].append(...threeGameSectionBtn);
                oneSectionGame[1].append(...twoGameSectionBtn);
                oneSectionGame[0].append(...oneGameSectionBtn);

                gamesSectionList[0].append(...oneSectionGame);
                gamesSectionList[1].append(...twoSectionGame);
                gamesSectionList[2].append(...threeSectionGame);

                this._sectionOneRight.append(...gamesSectionList);

                nineGameSectionBtn[0].innerText = arr[0][8];
                eightGameSectionBtn[0].innerText = arr[0][7];
                sevenGameSectionBtn[0].innerText = arr[0][6];
                sixGameSectionBtn[0].innerText = arr[0][5];
                fiveGameSectionBtn[0].innerText = arr[0][4];
                fourGameSectionBtn[0].innerText = arr[0][3];
                threeGameSectionBtn[0].innerText = arr[0][2];
                twoGameSectionBtn[0].innerText = arr[0][1];
                oneGameSectionBtn[0].innerText = arr[0][0];

                this._gameOne.innerText = arr[0][0];
                this._gameTwo.innerText = arr[0][1];
                this._gameThree.innerText = arr[0][2];
                this._gameFour.innerText = arr[0][3];
                this._gameFive.innerText = arr[0][4];


                let arrBtn = [];


                arrBtn.push(nineGameSectionBtn[0]);
                arrBtn.push(eightGameSectionBtn[0]);
                arrBtn.push(sevenGameSectionBtn[0]);
                arrBtn.push(sixGameSectionBtn[0]);
                arrBtn.push(fiveGameSectionBtn[0]);
                arrBtn.push(fourGameSectionBtn[0]);
                arrBtn.push(threeGameSectionBtn[0]);
                arrBtn.push(twoGameSectionBtn[0]);
                arrBtn.push(oneGameSectionBtn[0]);

                arrBtn.push(this._gameOne);
                arrBtn.push(this._gameTwo);
                arrBtn.push(this._gameThree);
                arrBtn.push(this._gameFour);
                arrBtn.push(this._gameFive);


                for (let i = 0; i < arrBtn.length; i++) {
                    arrBtn[i].addEventListener("click", (e) => {
                        e.preventDefault();
                        let name = arrBtn[i].textContent;
                        let gameName = name.replace(/ +/g, ' ').trim();
                        this._gameInpValue.value = gameName;
                    })
                }
            },
            error => error
        );
    };
}