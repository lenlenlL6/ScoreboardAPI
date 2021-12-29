[![](https://poggit.pmmp.io/shield.state/Scoreboard-API)](https://poggit.pmmp.io/p/Scoreboard-API)
<a href="https://poggit.pmmp.io/p/Scoreboard-API"><img src="https://poggit.pmmp.io/shield.state/Scoreboard-API"></a>
[![](https://poggit.pmmp.io/shield.api/Scoreboard-API)](https://poggit.pmmp.io/p/Scoreboard-API)
<a href="https://poggit.pmmp.io/p/Scoreboard-API"><img src="https://poggit.pmmp.io/shield.api/Scoreboard-API"></a>
![Alt text](https://media.forgecdn.net/avatars/125/449/636427205900083128.png)
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
# Remove Scoreboard
It will automatically delete Scoreboard with $objectiveName objective if $player has that Scoreboard.
```
$this->api->removeScoreboard($player, $objectiveName);
```
# Add Entry
It will automatically add an entry to the Scoreboard with the objective $objectiveName with the score $score and the character $text.
```
$this->api->addEntry($player, $objectiveName, $score, $text);
```
