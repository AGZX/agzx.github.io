class MarkdownAction {
protected $mdMenu = "/com/jikejishu/md/"; //md文件存放目录
/**
* 课程首页
*/
public function index() {
$markdown = file_get_contents($this->mdMenu . "README.md"); #读取指定目录下的README.md文件
$markdown = json_encode($markdown, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); #将获取到的内容转化成JSON
$this->assign("html", $markdown); #传到前台
$this->display();
}
}