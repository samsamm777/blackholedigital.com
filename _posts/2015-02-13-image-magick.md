---
layout: post
title: ImageMagick Amazon Linux
---

I needed a newer version of ImageMagick than is available on the yum packages on Amazon Linux. I tried using the remi repo but it failed with dependency errors. Here is what I did to install ImageMagick with support for PNG, JPG, and TIFF.

download the most recent package

{% highlight php linenos %}
wget http://www.imagemagick.org/download/ImageMagick.tar.gz
{% endhighlight %}

uncomress the package

{% highlight php linenos %}
tar -vxf ImageMagick.tar.gz
{% endhighlight %}

install the devel packages for png, jpg, tiff. these are dependencies of ImageMagick

{% highlight php linenos %}
sudo yum -y install libpng-devel libjpeg-devel libtiff-devel
{% endhighlight %}

configure ImageMagick without X11. this is a server without a display (headless) so we don't need X11

{% highlight php linenos %}
cd ImageMagick
./configure --without-x
make && make install
{% endhighlight %}

mission complete.