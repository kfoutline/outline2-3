[TOC]

#gulp
gulp是当下最流行的自动化工具 ，可以自动化完成我们开发过程中大量的重复工作。

为什么要用自动化构建工具？ 主要是用来自动完成一系列重复的操作，如：

* 编译：
    * less->css
    * sass->css
    * coffeescript->js
    * es6->es5
* 合并: css, js
* 压缩 ：css, js, html
* 优化：图片优化

>
官网：http://gulpjs.com/
中文网：http://www.gulpjs.com.cn/

##安装与运行
>前提是安装了nodejs环境

1. 全局安装 gulp（一台电脑安装一次）：
```
    npm install --global gulp
```
说明：全局安装gulp目的是为了通过它执行gulp任务（在不同的目录下都可以运行gulp）

2. 本地安装gulp（项目安装：一个项目安装一次）：
作为项目的开发依赖（devDependencies）安装：
```
    npm install --save-dev gulp
```

    - 本地安装gulp是为了调用gulp插件的功能，
    - --save-dev 保存配置信息至 package.json 的 devDependencies 节点
    - 这步操作前先新建package.json文件（npm init）
    - 这步完成后就可以安装各种gulp插件了

3. 创建gulpfile.js文件
在项目根目录下创建一个名为 gulpfile.js 的文件（重要）
说明：gulpfile.js是gulp项目的配置文件，是位于项目根目录的普通js文件，内容如下：
```
var gulp = require('gulp');

gulp.task('default', function() {
  // 将你的默认的任务代码放在这
});
```

4. 运行 gulp：
在命令行执行以下命名，如果不写任务名称，则自动运行default任务（如果有）
```
    gulp <任务名称>
```



##gulp工作流程
1. 选通过 gulp.src() 方法获取到想要处理的文件，并返回文件流
2. 然后文件流通过 pipe 方法导入到 gulp 的插件中
3. 经过插件处理后的文件流再通过pipe方法导入到 gulp.dest() 方法中
4. 最后通过gulp.dest() 方法把流中的内容写入到文件中

>PS：文件流=>文件在内存中的状态


##gulp API
* 创建任务
```
    gulp.task('buildsass',function(){

    });
```

* 匹配要处理的文件
     gulp.src(globs[, options])
     globs匹配语法：https://github.com/isaacs/node-glob（底部PS） 
     options 有3个属性buffer、read、base

* 输出文件
     gulp.dest(path[, options])
     把文件流中的内容中输出到指定目录

*  监听文件修改，并执行相应任务
     gulp.watch(glob [, opts], tasks)
     gulp.watch(glob [, opts, cb])  

##gulp插件
大部分插件都可以在http://www.npmjs.com找到，任何插件的使用都要经历以下三步：

1. 安装插件：npm
```
npm install --save gulp-htmlmin
```
PS：可一次性安装多个插件，插件间用空格隔开

2. 引包：require()
```
var htmlmin = require('gulp-htmlmin')
```

3. 使用：pipe()
```
gulp.task('htmlmin',function(){
   gulp.src('src/html/*.html')
     .pipe(htmlmin())
     .pipe(gulp.dest('dist/html'));
});
```

###常用gulp插件
* htmml压缩：gulp-htmlmin
* css压缩：gulp-clean-css
* js压缩：gulp-uglify
* 合并文件：gulp-concat
* 文件重命名：gulp-rename
* 编译Sass: gulp-sass
* 编译 Less：gulp-less

###其他常用插件
* 浏览器同步测试：browser-sync
* 创建node服务器：http-server

---

##globs语法
globs需要处理的源文件匹配符路径，语法如下

* 匹配单个文件：
    `gulp.src('src/js/index.js')`
* 匹配多个文件：
    `gulp.src(['src/js/index.js','src/js/detail.js']) //多个文件以数组形式传入`
* 匹配所有文件
    `gulp.src('src/js/*.js')`
* 匹配符：
    `!`：排除文件，
    `*`：匹配所有文件，
    `**`：匹配0个或多个子文件夹，
    `{}`：匹配多个属性

**使用案例**

* 压缩src/js目录下的所有js文件
* 除了test1.js和test2.js（**匹配src/js的0个或多个子文件夹）
```
    gulp.src(['src/js/*.js', '!src/js/**/{test1,test2}.js'])
```