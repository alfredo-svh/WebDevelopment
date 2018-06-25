(function(){
    'use strict';
    document.addEventListener('DOMContentLoaded', function(){

        /*
        //getElementByID
        var logo=document.getElementById('logo');
        var navigation=document.getElementById('navigation');

        navigation.style.display = "none";

        var navigation = document.getElementsByClassName('navigation');
        console.log(navigation[0]);

        var content = document.getElementsByClassName('content');
        console.log(content[0]);

        content[0].style.display = 'none';

        //getElementsByTagName
        var links = document.getElementsByTagName('a');
        console.log(links);

        for(var i=0;i<links.length; i++){
            links[i].setAttribute('target', '_blank');
        }

        var sidebarLinks = document.getElementById('sidebar').getElementsByTagName('a');
        console.log(sidebarLinks);

        for(var i=0; i<sidebarLinks.length; i++){
            sidebarLinks[i].setAttribute('href', 'https:www.google.com');
        }

        // querySelector
        var logo = document.querySelector('.logo');
        console.log(logo);

        var header = document.querySelectorAll('h2, footer p');
        console.log(header);

        var links = document.querySelectorAll('a');
        console.log(links);

        //querySelectorAll
        var link = document.querySelectorAll('a');
        
        for(var i=0;i<link.length; i++){
            console.log(link[i].innerText);
        }

        //nodes
        var links = document.querySelectorAll('#menu ul li a')[0];
        console.log(links.nodeType);
        console.log(links.nodeName);
        console.log(links.attributes);
        console.log(links.firstChild);
        console.log(links.firstChild.nodeValue);

        links.firstChild.nodeValue = 'Home';
        links.id = "myId";

        //create content
        var sidebar = document.querySelector('#sidebar');
        var newElement = document.createElement("H1");
        var newText = document.createTextNode("Hello World");
        newElement.appendChild(newText);
        sidebar.appendChild(newElement);

        //Add entry 6:
        var sidebarLinks = document.querySelectorAll('#sidebar ul');
        //creating the link
        var newLink = document.createElement('A');
        newLink.setAttribute('href', 'https://www.google.com')
        var linkText = document.createTextNode('Entry 6');
        newLink.appendChild(linkText);
        //creating the list
        var newList = document.createElement('LI');
        newList.appendChild(newLink);
        //add it to menu
        sidebarLinks[0].appendChild(newList);

        //clone node
        var content =document.querySelectorAll('main');
        var newContent = content[0].cloneNode(true);
        
        var sidebar = document.querySelector('aside');

        sidebar.insertBefore(newContent, sidebar.childNodes[5]); //?

        //insertBefore
        var sidebar = document.querySelector('aside');
        var mostVisited = document.createElement('H2');
        var visitedText = document.createTextNode('Most visited posts');
        mostVisited.appendChild(visitedText);
        sidebar.insertBefore(mostVisited, sidebar.childNodes[0]); //?
        var content = document.querySelectorAll('main h2');

        for(var i=0; i<content.length;i++){
            var newElement = document.createElement('LI');
            var newText = document.createTextNode(content[i].firstChild.nodeValue);
            newElement.appendChild(newText);
            sidebar.insertBefore(newElement, sidebar.childNodes[1]);
        }

        // delete nodes
        var firstPost = document.querySelector('main article');
        console.log(firstPost);
        firstPost.parentNode.removeChild(firstPost);
        var links = document.querySelectorAll('#navigation nav ul li a')[10];
        console.log(links);
        links.parentNode.removeChild(links);
        */

 /*       // replacing elements
        var oldNode = document.querySelector('main h2');
        var newNode = document.querySelector('footer h2');
        oldNode.parentNode.replaceChild(newNode, oldNode); //deletes new, updates old

        var newTitle = document.createElement('H2');
        var newText = document.createTextNode('Hello World');
        newTitle.appendChild(newText);

        var oldNode = document.querySelector('main h2');
        oldNode.parentNode.replaceChild(newTitle, oldNode);
*/
    });
  
})();