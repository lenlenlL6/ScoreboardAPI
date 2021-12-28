# ScoreboardAPI
A plugin that helps developers create a scoreboard easily using available APIs
# How to use APIs?
 First you have to get the ScoreboardAPI plugin:
```
$this->api = $this->getServer()->getPluginManager()->getPlugin("ScoreboardAPI");
```
# Create Scoreboard
It will automatically send to the $player.
```
$this->api->createScoreboard($player, $objectiveName, $displayName);
```
