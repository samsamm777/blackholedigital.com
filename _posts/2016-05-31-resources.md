---
layout: post
title: Sector:72 Resources
category: Dev
author: Sam
---

Over the bank holiday weekend I had a fair amount of time to think
about getting some new systems built into the game. As I've got the 
save/load serialization to a point now where it seems to work ok, and 
all the sub systems have their data persisted correctly, I feel like
I can start on a new sub-system.

I did a bit of a play test with the bots and machines which are currently
in the game. Things seem to be working well, the bots tranport crates to 
their desired machines depending on their jobs etc. Great. However,
I noticed a real playability problem which is going to make the game really
sucky really quickly. When you have a machine which requires raw resources,
you have to keep buying them off the market to fulfil the needs of the
machine. This isnt going to be sustainable because the more machines you
have, the more stuff you need to continuously buy off the market. Thats
going to suck; Open market, find resource, buy a bunch of them, rinse-repeat. 
People will hate that. I figured I could allow the player to buy bulk off the 
market, but that would mean a delivery of 100's of crates, and thats a lot of 
rigid bodies sat about in the scene not doing anything until a bot picks them 
up, so its going to be a bit shitty performance hit without any benefit. I really
want to try and only have crates in the scene which are in motion. Im not sure
how we will handle crates which have been chucked to one side yet.

So, in comes Dispensers!! Yay! The idea is that there is a Dispenser for each 
raw resource in the game. Right now, we're thinking there are going to be 3. 
Minerals, Oil, and some sort of gas(dont know a name yet). The dispenser is
a large cylindrical container in the scene which the player (or bot) can go
up to and ask for a crate of its resource. A crate will plop out and the 
global count of that resource will be reduced. This works great because the
idea for our resource gathering in space will suit this perfectly, when
resources arrive at the station from exploration, we can just fill the
Dispensers up, and we dont have to load anything else into the scene and
so theres nothing more for the player to manage. I have a concern about
how busy the dispensers will get onces you have a fully operational factory
as bots will be queuing up for resources. That might cause a big bottleneck
and hurt the gameplay a bit, and definately will be a pathing, AI nightmare.
I figure a quick fix solution is to have unlockable extra dispensers which 
can be bought buy rich players who need the increase resource throughput.
We'll suss that out in the future though. The system for the dispensers is relatively
simple. I just have a manager class which has a Dictionary of each resource and
a count of the amount we have. Then each dispenser just inc/decs each count as
and when they take or retrieve resources. Simple.

I think i'll have to build some sort of notification system to keep the player 
informed as and when resources are added to the system, so there a bit of a feel
for whether youre running at a loss and your reserves are diminishing. I think that
will be an important gameplay feature to manage the rate of consumption and aquisition
of resources. Keeping an equal income and expenditure will be important i think.

I'll get some screenshots up of some of the pleniminary prototypes so you can see
the progress.


