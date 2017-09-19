功能说明:

yii2表单的输入项内添加标签

效果如下:

![image](https://github.com/xindong888/yii2tags/blob/test/tagwidgetpic.png?raw=true)

使用说明:
表单视图内填写一下内容

```php
 <?= $form->field($model, 'tags')->widget(\yii2tags\TagsInputWidgetX::className()) ?>
```

[更多配置说明可以参看官网http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/bootstrap-2.3.2.html](http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/bootstrap-2.3.2.html)


