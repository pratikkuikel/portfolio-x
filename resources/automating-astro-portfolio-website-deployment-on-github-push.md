---
title: "Automating My Portfolio Website Deployment Using Github Actions"
description: "How I automated deployment of my portfolio website using github actions"
pubDate: "Mar 07 2024"
heroImage: "1709796494575.png"
---

Are you tired of manually deploying changes to your website every time you make updates to your code? You're not alone. For many developers, the process of pushing changes to a server can be tedious and time-consuming. But fear not, there's a solution that can save you time and effort: GitHub Actions.

In this article, we'll explore how I automated the deployment of this portfolio website using GitHub Actions. By the end, you'll have a streamlined workflow that automatically updates your website whenever you push changes to your repository.

## Why Automate Deployment?

Publishing new changes to the server every time you modify your code can be a cumbersome task. Not only does it consume valuable time, but it also introduces the risk of human error. Automating the deployment process not only saves time but also ensures consistency and reliability in updating your website.

## Introducing GitHub Actions

GitHub Actions is a powerful automation tool provided by GitHub that allows you to automate various tasks directly within your GitHub repository. Whether it's running tests, building projects, or deploying applications, GitHub Actions simplifies the process by enabling you to define custom workflows using YAML configuration files.

## Setting Up GitHub Actions

Let's walk through the steps I followed to automate the deployment of this portfolio website using GitHub Actions:

1. Define Deployment Workflow

   Create a .github/workflows/deploy.yml file in your repository to define the deployment workflow. In this file, you'll specify the actions to be performed whenever changes are pushed to the repository.

<!-- Talk about ftp in this blog -->
<!-- Google console search sitemap automation next blog -->

<!-- ## Check If Your site is Listed

https://developers.google.com/webmaster-tools/v1/errors
https://support.google.com/webmasters/thread/157027269?hl=en&sjid=1058018598832749067-AP
https://console.cloud.google.com/iam-admin/serviceaccounts/details/104544591246368591017;edit=true?previousPage=%2Fapis%2Fcredentials%3Fproject%3Dsurvey-404408&project=survey-404408
https://stateful.com/blog/google-search-console-github
https://search.google.com/search-console/links/drilldown?resource_id=sc-domain%3Apratikkuikel.com.np&type=EXTERNAL&target=&domain=
https://github.com/stateful/google-searchconsole-nodejs/blob/main/githubactions/.github/workflows/publish_sitemap.yml
https://stackoverflow.com/questions/28080416/webmasters-api-user-does-not-have-sufficient-permission-for-site
https://stackoverflow.com/questions/67306332/google-search-console-api-how-do-i-solve-user-does-not-have-sufficient-permiss
https://console.cloud.google.com/apis/credentials/consent?project=survey-404408

https://developers.google.com/webmaster-tools/v1/sites/list -->
