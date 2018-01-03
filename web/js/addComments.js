function requestComments(url) {
    var request = new XMLHttpRequest();
    request.open('GET', url);
//    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send();
  //  console.log('запрос ушел');

    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                var data =  JSON.parse(request.response);
                console.log(data);
              //var data = JSON.parse(request.response);
              //console.log(data[2].text);

             for (var i = 0; i< data.length; i++){
                  createCommentBlock(data[i].user, data[i].date, data[i].text);
              }


            }
        }
    };
}

function createCommentBlock(nameComment, dateComment, textComment) {

    //first row
    var newRow = document.createElement('div');
    newRow.className = 'row';

    var newcolsm1 = document.createElement('div');
    newcolsm1.className = 'col-sm-1';

    var thumbnail1 = document.createElement('div');
    thumbnail1.className = 'thumbnail';

    var newImg1 = document.createElement('img');
    newImg1.className = 'img-responsive user-photo';
    newImg1.src = 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png';

    thumbnail1.appendChild(newImg1);
    newcolsm1.appendChild(thumbnail1);
    newRow.appendChild(newcolsm1);

    var newcolsm11 = document.createElement('div');
    newcolsm11.className = 'col-sm-11';

    var newPanel = document.createElement('div');
    newPanel.className = 'panel panel-default';

    var newPanel_head = document.createElement('div');
    newPanel_head.className = 'panel-heading';

    var newStrong = document.createElement('strong');
    newStrong.textContent = nameComment;

    var newSpan = document.createElement('span');
    newSpan.className = 'text-muted';
    newSpan.textContent = dateComment ;

    newPanel_head.appendChild(newStrong);
    newPanel_head.appendChild(newSpan);
    newPanel.appendChild(newPanel_head);

    var newPanel_body = document.createElement('div');
    newPanel_body.className = 'panel-body';
    newPanel_body.textContent = textComment;

    newPanel.appendChild(newPanel_body);
    newcolsm11.appendChild(newPanel);
    newRow.appendChild(newcolsm11);
    document.querySelector('.container').appendChild(newRow);

}

