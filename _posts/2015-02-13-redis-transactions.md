---
layout: post
title: Redis CAS Transactions
---

Example use of predis transactions to do check and set conditional updates. Running this example from multiple threads will maintain a consistent increment value

{% gist 6ccb42d8260f198b2c28 %}