---
title: Contribute
visible: true
recaptchacontact:
    enabled: false
---

<meta property="og:url"                content="http://glug.nith.ac.in/new/" />
<meta property="og:type"               content="Website" />
<meta property="og:title"              content="Contribute - GLUG NITH - GNU/Linux User Group" />
<meta property="og:description"        content="GLUG NITH is a moniker for the GNU/Linux User Group of National Institute of Technology, Hamirpur. Our GLUG is mainly designed to cater to the GNU/Linux related needs of the students, faculty, staff, and anybody else belonging to NIT Hamirpur. We are a heterogeneous mixture of people ranging from the beta testers and kernel hackers to the fresh-faced newbies, held together together by a common love for GNU/Linux in particular and Free Software in general." />
<meta property="og:image"              content="http://glug.nith.ac.in/glugmainimage.jpg" />

Now you can easily make changes and contribute to the website in whatever way you like. Your contribution will help in building the website, keep it updated and allows GLUG-NITH community to extend with mutual collaboration. Moreover you will be learning a very famous industry tool git which is covered in the below few paragraphs.

## Brief Introduction to Git and its power

 GLUG-NITH website source code is maintained and organised very beautifully via this famous tool called git. This way anyone can make changes to the website with even little knowledge of html, php and javascript. Those who know php and other complex stuff can also make modifications to the website source code which will then directly be reflected on the website after approval of the administrator.

You can add new articles to the website, new projects to the website, new information or anything you like. You change its footer, header, color or anything. With this type of management of the website source code everything can be changed in whatever way you like. However your change should be meaningfull and should be accepted by the GLUG community before approval of your peice of code. At the moment we have excluded the images and other heavy stuff to be included and distributed alongwith the website source code just to decrease the size of the package that you will download in the following steps.

Above was just a brief introduction of what you can do with the website source code using git. Following few paragraphs will provide you a more brief introduction of how you can make changes to the website source code using this very powerful tool called git. 

## Installation

Git like any other software can be installed using your standard package manager as :
```
sudo apt-get install git
```
in Ubuntu or other Debian distributions.
or
```
yum install git
```
in Fedora or other RPM based distributions. 

## The website source code 

The website source code is hosted on github.com. Source code repository is at following URL :

!!! https://github.com/glugnith/glug.nith.ac.in

## How to contribute ?

 This is the website source code but you cannot modify it unless you create your own account on github.com and then fork this repository under your account. By fork, it means a copy of the same website source code for you to make modifications. You will then make changes to this forked website source code and then send a pull request which will be sent to the account on github from whom you forked the repository. In our case this account is glugnith. The glugnith owner on github then will see if your pull request need to be considered or not. In case of a good change or a good pull request, your request will be approved and will be merged with the main repository which is glugnith repository of website source code i.e from whom you forked the repository. The website administrator will then do some little operations to make that github code appear on the main website. Hence, finally your modification will travel to the website alongwith the approval of glug community.

One thing that must be noted here is in whole of this process, git manages everything very efficiently. The whole process will migrate your changes from one place to other, not the whole source code(except first time you clone the repository). So this way alot of bandwidth is saved and you do not need to wait for minutes to download and upload the whole source code if the same had to be accomplished manually without using git.

Apart from this, there are many other advantages of git. Git has all the history of the commits that has been done so far. You can see the git logs for that. You can also change the whole code to an earlier stage some months back or so.

This way you can very elegantly contribute to glug website source code. 

## Starting using it

 By this time, you might be wondering how to accomplish this whole thing. For that you need to be aware of this tool git. There are several references on the internet that can help you in getting familiar with git and start hacking. Since the website source code is hosted on Github and they provide a very good guide to start learning and using git, best place to start using git is their BootCamp. This will help you in learning git from scratch and at the same time getting familiar with Github interface.

The BootCamp mentioned above will help you in performing basic tasks that should be enough to contribute. For more information and learning more about git and ways to use git, nothing should be better than their official website and documentation here. 

## Learning Material

If you want to learn more about git than there are plenty of books , websites, video tutorials online which you can read and watch both online and offline .The links to directly download them are provided below


1. [Pro Git](https://github.s3.amazonaws.com/media/progit.en.pdf)- It's an official book of the Git and GitHub community written by Scott Chacon and published by Apress.

2. [Version Control with Git](http://it-ebooks.info/go.php?id=919-1371556924-6aefe9f2faf570c17fa3f92881d42669)- Version Control with Git takes you step-by-step through ways to track, merge, and manage software projects, using this highly flexible, open source version
control system.

3. [Git](http://it-ebooks.info/go.php?id=1759-1371556930-ca26e1a6d8a0a8076267868a145b3726)- Version Control for Everyone-A complete beginner's workflow for version control of common documents and content. E xamples used are from non-techie, day to day computing activities we all engage in. Learn through multiple modes - readers learn theory to understand the concept and reinforce it by practical tutorials. Ideal for users on Windows, Linux, and Mac OS X.

4. [Pragmatic Guide to Git](http://it-ebooks.info/go.php?id=45-1371556925-a36612fe99cabace47573a78fd96e557)- Need to learn how to wrap your head around Git, but don't need a lot of hand holding? Grab this book if you're new to Git, not to the world of programming. Git tasks displayed on two-page spreads provide all the context you need, without the extra fluff.

### Great articles

Here are some of the great links to articles which provide you all the information t you need to know about git.

1. [How to learn git](http://answers.oreilly.com/topic/801-how-to-learn-git-a-link-roundup/) - A link roundup-This article consists of links to the entire material available on the web related to git.It consists of links to videos , blog , wikis , reference etc. Just click it and start learning.

2. [Git for beginners](http://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide): The definitive practical guide- An article on stack overflow website consists of all the faq, installation , references to git. 