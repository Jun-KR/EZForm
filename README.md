# EZForm
 #### [PMMP PLUGIN] Easy to use form
<br>

> ButtonForm usage example

```
$form = new ButtonForm(function(Player $player, $data){  
  if($data === 0){  
  echo "heelo Button!";  
  }  
  if($data === 2){  
  echo "heelo Button2";  
  }  
});  
  
$form->setTitle("Title");  
$form->setContent("Content");  
$form->addButton("Button!");  
$form->addButton("Button2");  
  
$form->sendForm($player);
```
<br>

> CustomForm usage example

```
$form = new CustomForm(function(Player $player, $data){  
  if(isset($data[2])){  
  echo $data[2];  
  }  
});  
  
$form->setTitle("Title");  
$form->addInput("input"); //0  
$form->addLabel("label"); //1  
$form->addDropdown("dropdown", ["Hello", "안녕하세요", "こんにちは"]); //2  
$form->addToggle("toggle"); //3  
$form->addSlider("slider", 0, 5); //4  
$form->addStepSlider("stepslider", ["go", "gogo", "gogogogogogogooggogogogogogogo"]); //5  
  
$form->sendForm($player);
```
<br>

> ModalForm usage example

```
$form = new ModalForm(function(Player $player, $data){  
  if($data === true){  
  $player->getInventory()->clearAll();  
  $player->getArmorInventory()->clearAll();  
  $player->sendMessage("complete");  
  }  
});  
  
$form->setTitle("Title");  
$form->setContent("Do you really want to clear your inventory?");  
$form->setButton1("YES");  
$form->setButton2("NO");  
  
$form->sendForm($player);
```

<br><br><br>

 - 🥕🥕🥕🥕🥕🥕🥕🥕
 - plz star~~
