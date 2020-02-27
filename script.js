const createNews = news => $(`
<div id="${news.id}" class="mt-3 card" style="
                background-image: url(${news.url});
                width: 100%;
                height: 350px;
                background-size: cover;
                border-radius: 3px;
                position: relative;
                margin-right:10px;
            ">
                <div class="s-news-thumb-title">
                    <div>${news.title}</div>
                    <button class='s-btn-del'><img width='30px' src="./imgs/icon-del.png"></button>
                </div>
            </div>


`);
