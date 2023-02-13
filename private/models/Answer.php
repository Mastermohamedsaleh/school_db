<?php


class Answer extends Model{
    



    public function validate($DATA)
    {
        $this->errors = array();
        //check for question name
        // if(empty($DATA['question']))
        // {
        //     $this->errors['question'] = "Please add a valid question";
        // }
        // Date
        // if(empty($DATA['dt']))
        // {
        //     $this->errors['dt'] = "Please add The Date";
        // }

        //check for multiple choice answers
        // $num = 0;
        // $letters = ['A','B','C','D','F','G','H','I','J'];
        // foreach ($DATA as $key => $value) {
        //     // code...
        //     if(strstr($key, 'choice')){
        //         if(empty($value))
        //         {
        //             $this->errors['choice'.$num] = "Please add a valid answer in choice ".$letters[$num];
        //         }
        //         $num++;
        //     }
        // }

        // if(isset($DATA['correct_answer'])){

        //     if(empty($DATA['correct_answer']))
        //     {
        //         $this->errors['correct_answer'] = "Please add a valid answer";
        //     }
     




      foreach($DATA as $key => $value){
     
        if(empty($DATA)){
            $this->errors['answers'] = "Please Fill All Answers";
        } 

      }
 
        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;

    }
    }
  






