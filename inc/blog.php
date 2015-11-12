
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">My
                        <strong>rants</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/bueller.jpg" alt="">
                    <h2>How do I ask the right kinds of questions? Bueller? Bueller?
                        <br>
                        <small>09.30.2014</small>
                    </h2>
                    <p>What do I need to know</p>
                    <p>Asking the right question is a good skill to have. I'm pretty wordy when it comes to writing. You guys are proabaly sarcastically saying "NO WAY!" after reading a few of my posts. Part of my learning style says that I don't like to do tasks over again so there. Ha! Anyways, going through some of the required readings, I found a few hints pretty helpful...</p>
                    <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                    <div ng-show="checked">
                    <p>Imagine you're trying to answer the question.<br/>Imagine that you were approached with your question. The first thing you want to ask yourself the following questions: "Does this make any sense?", "Is it clear what I'm being asked?", "Can I understand the question?", "Do I need to ask any questions in order to provide an answer?". Once your question can pass the test, then your question is pretty darn good.</p>
                    <p>Write a title that summarizes the specific problem<br/>
                    My titles are usually very lengthy and I get bored reading them myself, so trying to write the title last. You can pretend that you have to be uber specific and effectively summarize your problem. A good example: Why does str == "value" evaluate to false when str is set to "value"?</p>
                    <p>What's the context?<br/>
                    Before asking your question, make sure everyone is on the same train of thought. Let them know what platform you're using and include all relevant tags in the question such as lannguage version, platform version, operating system,  any other relevant software, and any other constraints.</p>
                    <p>Introduce the problem before you post any code<br/>
                    Try to keep it short and sweet. Try not to include too many questions because "ain't nobody got time for that". Rather, provide a super slim summary of the issue that includes how you ran into the problem and what you've tried to fix it. Since you're trying to catch the reader's attention, try to make it fun to read.</p>
                    <p>Sample code and data<br/>
                    When adding your sample code, the code should:<br/>
                    Be standalone - try not to talk to a database unless you REALLY have to. If you are going to add an XML file keep it short<br/>
                    Be complete - include all relevant information such as imports or using directives<br/>
                    Actually compile - Use the real code and not something like your code<br/>
                    Demonstrate the problem - "I expected Nikes but I got Sikes."</p>
                    <p>Help others reproduce the problem<br/>
                    Proof-read before posting<br/>
                    You know what they say, "Measure twice and cut once." Read before posting.<br/>
                    Use capital letters where appropriate<br/>
                    Split text into paragraphs<br/>
                    Use actual words instead of abbreviations<br/>
                    Make your code look like code with indents Final check: Does your title still describe the problem?</p>
                    <p>Question analysis from Stackoverflow<br/>
                    Title: Using local video files in iOS app (xcode)<br/>
                    Question: I'm looking for the best way to play back video files in my iOS App. My app is currently in development and there will be around 50 videos (each 30 seconds long) with short tutorials. If possible I want them all local, so users can watch the videos when they do not have an internet connection. I could not find a similar question on stack overflow (maybe I'm looking in the wrong section, please correct me if I'm wrong).<br/><br/>

                    So I was thinking about 2 different options:<br/><br/>

                    -User downloads app from store, including videos<br/>
                    -User downloads app without the videos, and has to download the videos first when using the app for the first time and save them locally (forever)<br/><br/>

                    So if anyone has experience with this, I would really appreciate some help! Thanks</p>
                    <p>Analysis:<br/>
                    The user did not use a good title. It was vague and didn't summarize the issue. Maybe they should have used "How to make video files local in iOS app"?<br/>
                    They really didn't attempt to tell anyone how they would prefer one option over the other.<br/>
                    They didn't describe their setup such as OS.</p>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/saltnpepa.jpg" alt="">
                    <h2>Express Yourself (in Ruby)
                        <br/>
                        <small>09.29.2014</small>
                    </h2>
                    <p>What's a regular expression and a regular expression literal??</p>
                    <p> A regular expression (regexp) are patters which describe the contents of a string. They help you match/find other strings (or sets of strings) or give you parts that match your search terms.</p>
                    <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                    <div ng-show="checked">
                    <p>A regular expression literal is a pattern between slashes (/../), between arbitrary delimiters followed by %r{..}, or by using Regexp::new. For example:</p>

                    <p>Here 'nose' does not contain 'booger'(or does it?)<br/>
                        /booger/.match('nose') #=> nil<br/>
                        Did I trick you into looking at the mirror?!</p>

                    <p>Here 'toenail' contains 'toe',<br/>
                        /toe/.match('toenail') #=> #MatchData "toe"<br/>
                        so winner winner chicken dinner!</p>

                        You're probably saying, "What if I want to know where it's at, bro?"
                        Well, you can use (=~). =~ is used as a basic patter-matching tool. The only catch is that you have to use a regular expression (left) and the other is a string to match against. For example:

                        Since I'm from Cali, let's use the word like...
                        /like/ =~ 'hellahellahellahellalikeawesome' #=> 15
                        It will return where, like, like starts.

                        On the flipside,...
                        /wave/ =~ 'Giantsgame' #=> nil
                        because we don't do the wave at Giants games! I'm just doing my part to educate future Giants fans out there. #publicserviceannouncement

                        What happens if you got special characters (aka. Metacharacters) in my search terms? Well, metacharacters are (,).[,],{,},.,?,+,*. They have a



                        but if you want to find them, you'll have to include backslashes (\\). It's like a dog marking it's territory for other dogs. You're marking the special characters for the computer to do somthing else. For example:

                        /1 \+2 = 3\?/.match('Does 1 + 2 = 3?') #=> #MatchData "1 + 2 = 3?"

                        What if I got a few things I want to check for?
                        You are full of questions, aren't you?! Let me drop some knowledge: In this case, you would use a character class. You'll still use .match but you'll have to do something different in the syntax:

                        If you're on the final stage of Wheel of Fortune and the category is film. You can select a bunch of letters like this:

                        /S[aeiou]percalifragilisticexpialidocious/.match("Supercalifragilisticexpialidocious")
                        => #MatchData "Supercalifragilisticexpialidocious"
                        Marry Poppins, son! /[aeiou]/ means a,e,i, or u instead of /aeiou/ which means a followed by e followed by i...

                        If you are searching for a range of letters(or numbers), you'd use the (-) sign. For example:

                        /[0-99a-z]/.match('99problems') #=> #MatchData "9"

                        If you are trying to exclude seomthing from a search, you can use the caret (^):

                        /[^a-eg-z]/.match('f') #=> #MatchData "f"

                        I'm outta time, but there's a whole lot more you can do. Click here to check it out.
                    </p>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/compass.jpg" alt="">
                    <h2>Spin the Compass of Shame
                        <br>
                        <small>09.29.2014</small>
                    </h2>
                    <p>My last big emotional conflict</p>
                    <p>The Compass of Shame, coined by Dr. L. Nathanson, lists the four different defensive directions that we can act towards others when we're shamed.</p>
                    <input type="checkbox" ng-model="checked"> I wanna read more!</p>
                    <div ng-show="checked">
                    They are Withdrawl (e.g. isolating oneself or running and hiding), Attack Self (e.g. self put-down or masochism), Avoidance (e.g. denial, abusing drugs/alcohol, or distraction through thrill-seeking), and Attack Other (e.g. "Turning the tables", blaming the victim, or lashing out verbally/physically). You can read more about it here.



When I was in grade school, I had conflict with someone in the grade above me. I can't recall if there was anything specific we had conflict about. During recess, he would constantly tease me. Since I had a short temper, I would immediately become upset and shout obsenities back at him. He just laughed.

Looking back at it, reacting in such a way doesn't make the situation any better. Come to think about it, he probably liked aggravating me. If I could go back, I would just ignore him. From that experience, I learned that I needed to be more patient with idiots. :P
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
