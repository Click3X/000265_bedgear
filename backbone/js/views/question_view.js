define([
  'backbone',
], function (Backbone) {

    var QuestionView = Backbone.View.extend({
        //template: _.template($('#question-template').html()),
        initialize: function(){
            //this.model.bind("change",this.render,this);
        },
        events: {
            'click .answers.singlechoice li button':'HandleAnswerClick',
            'click .answers.singlechoice a':'HandleAnswerClick',
            'click .answers.singlechoice a.continue':'HandleAnswerClick',
            'click .answers.sleeppos a.spadvance':'HandleRadioClick',
            'click .answers.sleeppos a.spsub':'HandleSubClick',
            'click .answers.sleeppos.beta a':'HandleBetaSubClick',
            'click .answers.sleeppos.gamma a':'HandleGammaSubClick',
            'click .answers a.regcontinue':'HandleMultiChoiceClick',
            'click a.spcontinue':'HandleSubChoiceClick',
            'click .yesno a':'HandleYesNo',
            'click .answers.temperature a.tempcontinue':'HandleTemperature',
            'click .back':'HandleBackClick',
        },
        HandleYesNo: function(evt){
            if($(evt.currentTarget).hasClass('yes')){
                //this.$('.yesno').hide();
                this.$('.multichoice').show();
            }else{
                this.model.set('answerChoice', '');
                this.model.set('answerBit', 0);
                this.model.set('answerDetail', '');

                NextQuestion(false);
            }
        },
        HandleAnswerClick: function(evt){
            if( $(evt.currentTarget).hasClass('gender') ){
                if( $(evt.currentTarget).hasClass('female') ){
                    glgender = "female";
                }else{
                    glgender = "male";
                }
                $(evt.currentTarget).parent().find('.gender').addClass("fadeout");
                $(evt.currentTarget).removeClass("fadeout");
                $('body').removeClass('male').removeClass('female').addClass(glgender);
            }
            this.model.TallyMon($(evt.currentTarget).attr('answerId'));
            return false;
        },
        HandleSubClick: function(evt){
            console.log('input[answerid="'+$(evt.currentTarget).attr('answerId')+'"]');
            this.$('.multichoice input:checked').prop('checked', false);
            this.$('.multichoice input[answerid="'+$(evt.currentTarget).attr('answerId')+'"]').prop('checked','checked');

            console.log(this.$('.multichoice input[name="sleeppos"]:checked').val());
            $.each(this.$('.multichoice input[name="sleeppos"]'),function(key, val){
                console.log("remove",$(val).attr('answerText').toLowerCase());
                $('.questiongroup').removeClass($(val).attr('answerText').split(" ")[0].toLowerCase()+"pos");
            });
            this.$('.answers a').css('color',"");
            if( this.$('.multichoice input[answerid="'+$(evt.currentTarget).attr('answerId')+'"]').attr('answerText').split(" ")[0].toLowerCase() == "multiple" ){
                this.$('.beta').show();
            }else{
                this.$('.beta, .gamma').hide();
                this.$('.questiongroup').addClass(this.$('.multichoice input[answerid="'+$(evt.currentTarget).attr('answerId')+'"]').attr('answerText').split(" ")[0].toLowerCase()+"pos");
            }
            this.$('.answers a[answerid="'+$(evt.currentTarget).attr('answerId')+'"]').css('color',"#fff");
            //if( $(evt.target).parent().parent().hasClass('alpha') ){
            //    this.$('.alpha').hide();
            //    this.$('.beta').show();
            //}
        },
        HandleBetaSubClick: function(evt){
            if( $(evt.currentTarget).hasClass('dkcontinue') ){
                this.$('.beta').hide();
                this.$('.gamma').show();
            }else{
                this.$('.beta a').css('opacity','0.6')
                $(evt.currentTarget).css('opacity','1');
            }
        },
        HandleGammaSubClick: function(evt){
                this.$('.gamma a').css('opacity','0.6')
                $(evt.currentTarget).css('opacity','1');
        },
        HandleSubChoiceClick: function(evt){
            this.model.TallyMon(this.$('.multichoice input:checked').attr('answerId'));
        },
        HandleTemperature: function(evt){
            //alert("calling tally mon temp");
            this.model.TallyMonTemp(this.$('.ui-slider-handle').find('span').html());
        },
        HandleMultiChoiceClick: function(evt){
            var answerList = "";
            $.each(this.$('.multichoice input:checked'),function(idx,answer){
                if( answerList != "" ) answerList += ",";
                answerList += $(answer).val();
            });
            console.log(answerList);
            this.model.set('answerChoice', answerList);
            this.model.set('answerBit', 0);
            this.model.set('answerDetail', '');

            NextQuestion(false);
        },
        HandleBackClick: function(evt){
            PreviousQuestion();
        },
        AddModel: function(pModel){
            this.model = pModel;
            //this.model.bind("change",this.render,this);
        },
        AskQuestion: function(){
            //if( this.model.get('id') == 2) return false;
            if( typeof( this.model.get('id') ) != "undefined" ){
                if(this.$('.fadeout').length > 0){
                    this.$('.fadeout').fadeOut(function(self){
                        return function(){
                            self.model.fetch({success: function(self){
                                 return function(){
                                 self.render();
                                 };
                            }(self)});
                        };
                    }(this));
                }else{
                    this.model.fetch({success: function(self){
                         return function(){
                         self.render();
                         };
                    }(this)});
                }
            }else{
                if(this.$('.fadeout').length > 0){
                    $('#question .fadeout').fadeOut(function(){
                        this.render();
                    });
                }else{
                    this.render();
                }
            }
        },
        RevealChoice: function(self){
          return function(){
              //alert(self.$('.answers li:hidden:first').html());
              self.$('.answers li:hidden:first').css({
              opacity: 0,
              marginLeft: 200
            }).stop().show().animate({
              opacity: 1,
              marginLeft: 0
          }, 200, self.RevealChoice(self));
          };
      },
      HandleTemperatureSlide: function( self ) {
          return function( event, ui ){
              slidx = ui.value;
              console.log(slidx);
              self.$('.ui-slider-handle').html("<span>"+slidx+"</span>");
          };
      },
        render: function(){

            console.log(this.model.attributes);
            console.log('getting template', '#question'+this.model.get('question').questionNumber+'-template');
            //if( typeof(this.template)=='undefined'){
                var templateid = '#question'+this.model.get('question').questionNumber+'-template';
                var template = _.template( $(templateid).html(), {} );
            //}
            $(this.el).html(template(this.model.attributes.question));

            // Set the gender context
            $('body').removeClass('male').removeClass('female').addClass(glgender);

            for( var idx=0; idx <= this.model.get('question').questionNumber+1; idx++ ){
                $(this.el).removeClass('q'+idx);
            }
            $(this.el).addClass('q'+this.model.get('question').questionNumber);
            this.$('.avatar').addClass('embiggen');

            this.$('.slider').slider({
                value:50,
                min: 0,
                max: 100,
                step: 1,
                slide: this.HandleTemperatureSlide(this)
            });
            this.$('.ui-slider-handle').html("<span>50</span>");

            // this.$('#sidepos').hover(function(){
            //     $('.answers').addClass('side');
            // },function(){
            //     $('.answers').removeClass('side')
            // });
            // this.$('#backpos').hover(function(){
            //     $('.answers').addClass('backpos');
            // },function(){
            //     $('.answers').removeClass('backpos')
            // });
            // this.$('#stomachpos').hover(function(){
            //     $('.answers').addClass('stomach');
            // },function(){
            //     $('.answers').removeClass('stomach')
            // });
            // this.$('#multiplepos').hover(function(){
            //     $('.answers').addClass('multiple');
            // },function(){
            //     $('.answers').removeClass('multiple')
            // });

            $('.panel').hide();
            this.$el.show();

            this.$('.question').css('opacity',0);
            //this.$('.answers li').hide();

            this.$('.question').animate({
                opacity: 1
                //marginLeft: 0
            }, 500);

        }
    });

    return QuestionView;
});
