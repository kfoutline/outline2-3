#Webpack

##介绍
Webpack 是一个前端资源加载/打包工具。它将根据模块的依赖关系进行静态分析，然后将这些模块按照指定的规则生成对应的静态资源。它做的事情是，分析你的项目结构，找到JavaScript模块以及其它的一些浏览器不能直接运行的拓展语言（Scss，Less等），并将其转换和打包为合适的格式供浏览器使用。

![](./img/webpack.png)
上图所示，Webpack 可以将多种静态资源 js、css、less、sass等打包成一个静态文件，有效减少页面的http请求。

##使用
###环境安装
* 安装nodejs环境


##配置
基于webpack开发的项目，需要在项目使用webpack.config.js文件进行配置选项

###entry
是页面入口文件配置，可配置一个或多个入口文件（对应输出文件）
###output 
是对应输出项配置（即入口文件最终要生成什么名字的文件、存放到哪里），其语法大致为：
```javascript
    {
        entry: {
            page1: "./page1",
            //支持数组形式，将加载数组中的所有模块，但以最后一个模块作为输出
            page2: ["./entry1", "./entry2"]
        },
        output: {
            path: "dist/js/page",
            filename: "[name].bundle.js"
        }
    }
```
###mode 开发模式
是webpack4新增配置项，用于设定开发模式（development,production,none）

###loader 加载器
最关键的一块配置。它告知 webpack 每一种文件都需要使用什么加载器来处理

* css-loader    作用是让webpack可以解析执行css文件
* style-loader  作用是生成一个style标签，并且将解析后的css文件插入到style中去

* babel-loader 
    * babel-preset-env
    * babel-core



###plugins 插件

* HtmlWebpackPlugin
这个插件的作用是依据一个简单的index.html模板，生成一个自动引用你打包后的JS文件的新index.html
    * template 指定模板

```javascript
   {
   // ...
    plugins:[
        new webpack.BannerPlugin('copyright laoxie'),
        new htmlWebpackPlugin({
            template:'app/index.html'
        })
    ]
   }
```


##loaders 
>是最关键的一块配置。它告知 webpack 每一种文件都需要使用什么加载器来处理