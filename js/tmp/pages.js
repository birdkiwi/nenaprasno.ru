$(document).ready(function(){
    $('body').append(
        '<div id="verstka" style="position: fixed; top: 40%; right: 0; background: #fff; border: 1px solid #cecece; box-shadow: 2px 3px 10px #808080; padding: 15px; z-index: 999;"><span  id="close" style="cursor:pointer; border: 1px solid #cecece;">X</span> Страницы верстки:<br />' +
        '1. √ <a href="index.php">Главная</a><br />' +
        '2. √ <a href="text.php">Текстовая</a><br />' +
        '3. √ <a href="staff.php">Сотрудники Фонда</a><br />' +
        '4. √ <a href="news.php">События и новости</a><br />' +
        '5. √ <a href="reports.php">Отчеты</a><br />' +
        '6. √ <a href="projects.php">Все проекты</a><br />' +
        '7. √ <a href="project.php">Проект</a><br />' +
        '8. <a href="directory.php">Справочник</a><br />' +
        '</div>');
    $('#close').click(function(e) {
        $('#verstka').hide();
        e.preventDefault();
    });
});