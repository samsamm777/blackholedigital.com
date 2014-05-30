---
layout: post
title: Loading non PSR-0 classes in Symfony 2.*
---

In my current project, I am using Protocol Buffers for our RPC interoperability. Wer'e using the allegro/php-protobuf implementation for PHP. It all works great. However, the PHP classes it generates from the proto file are not PSR-0 standard, so getting Symfony to autoload them isnt going to happen, which is a real shame. I don't want to have to manually edit each of the classes which are generated because I would have to do this every single time we changed the proto file, which would suck!

So after a bit of fiddling I worked out that you can simply add any specific file to the autoloader and give it a namespace. This then allows you to 'use' the class anywhere in your Symfony application.

### 1. Open the autoload.php file in the /app directory.

All you need to do is add this little line of code to add the classes to the autoloader. Easy!

    $loader->addClassMap(array(
        'MyPackage\\MyNamespace\\MyClassName' => __DIR__.'/../src/MyPackage/Common/filename.php'
    ));

Don't forget to escape the slashes on the namespace or it wont work.