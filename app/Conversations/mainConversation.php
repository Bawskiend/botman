<?php
namespace App\Conversations;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Outgoing\Question;
class mainConversation extends Conversation
{
    public $tags;
    public function run () {
        $this->AskforRequest();
    }
    public function AskforRequest(){
        $question = Question::create("?!");

   $question->addButtons( [
       Button::create('🤤')->value('begin')
   ]);
       $this->ask($question, function(Answer $answer){
           if($answer != ''){
        $this->Search();
           }
       });
    }
    public function Search(){
        $this->ask(':',function (Answer $answer){
            $this->tags = $answer->getText();
        });

       
   }
   
}
?>