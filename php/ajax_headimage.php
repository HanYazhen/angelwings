<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/21
 * Time: 15:52
 */
//处理Ajax上传的头像
header("Content-Type:text/html;charset=utf-8");      //设置头部信息
include "common.php";
$uid = $_SESSION['uid'];
$base64_image_content = $_POST['image'];
//$base64_image_content = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA2AAAANgCAYAAABKkgukAAAgAElEQVR4nOzd95dc1ZU+fP2z7zue8YwTOQiBIspIgI2NszGOYwODjdSpqquzcgIEQhKSENgkY0BEofP9oe6tPnffHU+491artdazWnTdqhb2LC995tlnnw3fn3Lu+1PO/WC6njtA7px27s6Z1dwFcveMc3f3hrnHy71l+s7d5+X+MrPOPVDkwSIbZ53bOBjmoSKbBs5tmnPu4SKPzDn3yLxzm4tsmXdu68Iw24psX3RuR5FHl5zbWWTXsnO7i+xZdm7vyjD7Vpzbf2SYx444d+CocweLPH7MuSeOOffkMed+eHyYHx137qkTzv34hHM/OeHc0yed++lJ53520rmfn3LuF6ec+8Vp53552rlfnXHu12ec+81Z554569xvzzn37DnnfvfyML9/xbk/vOLcH1917k+vOvfn88P872vO/eU15/76mnPPve7c86879/wF51644Nz/XXDuxTec+9sbzv394jAvXXTu0CXnDl9y7vBl5yYuOzf55jBTV5ybvuLczBXnZq4617vqXO+ac/1rzs2+NcygyNx15+aLLFx3buHtYRbLvOPckpdlP/9wbiUyy36Kz/V/3uI7q3+W8s82//bwzztXZHB9+O8y+5Zz/beG/569a87NXBv++09fHf5nMnVl+J/PRJHDl507dNm5ly4N8/eLzv3tonMvXnTu/95w7oU3hv/5P39h+N/JX1937i+vD/+7+vNrw//e/nTeuT+ed+4Przr3+1ed+90rzj37inO/fdm5Z1527plzzv3mnHO/Puvcr84698szzv3ijHM/P+3cz04799NTzj19yrmfnHTux0WeOuHcj04498MTzj153Lknjjv3+PHh/20ePObcgWPOPXZ0mP1Hndt31Ll9R5zbe8S5PUec27Pi3O4V53YV2bns3KNFdiw7t31pmG1Lzm1bdG7ron…";

//匹配出图片的格式
if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)) {
    $type = $result[2];

//    创建文件夹
    $new_file = "../image/" . $uid . "/";
    if (!file_exists($new_file)) {
//检查是否有该文件夹，如果没有就创建，并给予最高权限
        mkdir($new_file, 0700);
    }

    $new_file = $new_file . "headimage" . "/";
    if (!file_exists($new_file)) {
//检查是否有该文件夹，如果没有就创建，并给予最高权限
        mkdir($new_file, 0700);
    }

    $new_file = $new_file . "headimage" . ".{$type}";
    if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {
//        echo '新文件保存成功：',$new_file;
        echo "success";
    } else {
//        echo '新文件保存失败';
        echo "failed";
    }
}

echo "success";