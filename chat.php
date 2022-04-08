<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/tab_icon.png">
    <script src="./js/chat/chat.js"></script> 
    
    <link rel="stylesheet" href="./css/chat.css">
    <title>Chat</title>
</head>
<body>
    <div class="container clearfix">
        <div class="people-list" id="people-list">
          <div class="search">
            <input type="text" placeholder="Search" />
            <i class="fa fa-search"></i>
          </div>
          <ul class="list">
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>
              <div class="about">
                <div class="name">Bryan Cabigting</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>              
                <div class="about">
                <div class="name">Karl Parole</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> left 7 mins ago
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>              
                <div class="about">
                <div class="name">Jayson Rivero</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>              
                <div class="about">
                <div class="name">Eunice Kaye Cabanting</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>              
                <div class="about">
                <div class="name">Jennifer Delos Santos</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>              
                <div class="about">
                <div class="name">James Darren Alacar</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> left 30 mins ago
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>              
                <div class="about">
                <div class="name">Angel Cailing</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> left 10 hours ago
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>
                <div class="about">
                <div class="name">Marielle De Vera</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>
                <div class="about">
                <div class="name">Phoemela Ann Laxamana</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> offline since Oct 28
                </div>
              </div>
            </li>
            
            <li class="clearfix">
              <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar"/>
                <div class="about">
                <div class="name">Jane Forones</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- CHAT CONVERSATION -->

        <!-- CHAT HEADER -->
        <div class="chat">
          <div class="chat-header clearfix">
            <img src="./assets/img/icons/homepage/account.png" alt="avatar" id="avatar" />
            
            <div class="chat-about">
              <div class="chat-with">Bryan Cabigting</div>
              <div class="chat-num-messages">already 69 messages</div>
            </div>
            <i class="fa fa-star"></i>
          </div> <!-- end chat-header -->
          
          <!-- CHAT BOX -->
          <div class="chat-history">
            <ul>
              <li class="clearfix">
                <div class="message-data align-right">
                  <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
                  <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
                  
                </div>
                <div class="message other-message float-right">
                  Hi Vincent, how are you? How is the project coming along?
                </div>
              </li>
              
              <li>
                <div class="message-data">
                  <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                  <span class="message-data-time">10:12 AM, Today</span>
                </div>
                <div class="message my-message">
                  Are we meeting today? Project has been already finished and I have results to show you.
                </div>
              </li>
              
              <li class="clearfix">
                <div class="message-data align-right">
                  <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
                  <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
                  
                </div>
                <div class="message other-message float-right">
                  Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
                </div>
              </li>
              
              <li>
                <div class="message-data">
                  <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                  <span class="message-data-time">10:20 AM, Today</span>
                </div>
                <div class="message my-message">
                  Actually everything was fine. I'm very excited to show this to our team.
                </div>
              </li>
              
              <li>
                <div class="message-data">
                  <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                  <span class="message-data-time">10:31 AM, Today</span>
                </div>
                <i class="fa fa-circle online"></i>
                <i class="fa fa-circle online" style="color: #AED2A6"></i>
                <i class="fa fa-circle online" style="color:#DAE9DA"></i>
              </li>
              
            </ul>
            
          </div> <!-- end chat-history -->
          
          <div class="chat-message clearfix">
            <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                    
            <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
            <i class="fa fa-file-image-o"></i>
            
            <button>Send</button>
    
          </div> <!-- end chat-message -->
          
        </div> <!-- end chat -->
        
      </div> <!-- end container -->
    
    <script id="message-template" type="text/x-handlebars-template">
      <li class="clearfix">
        <div class="message-data align-right">
          <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
          <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
        </div>
        <div class="message other-message float-right">
          {{messageOutput}}
        </div>
      </li>
    </script>
    
    <script id="message-response-template" type="text/x-handlebars-template">
      <li>
        <div class="message-data">
          <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
          <span class="message-data-time">{{time}}, Today</span>
        </div>
        <div class="message my-message">
          {{response}}
        </div>
      </li>
    </script>
    
</body>
</html>