import { useState, useRef } from "react";
import "./App.css";
import Image from "./Image";
import Story from "./Story";

function App() {
  const [emailSubmitted, setEmailSubmitted] = useState(false);
  const enteredEmailRef = useRef();

  function submitHandler(event) {
    event.preventDefault();

    const now = new Date();

    const emailData = {
      date: now.toISOString(),
      email: enteredEmailRef.current.value,
    };
    fetch("https://main-website-gg-default-rtdb.firebaseio.com/emails.json", {
      method: "POST",
      body: JSON.stringify(emailData),
      header: { "Content-Type": "application/json" },
    }).then(() => {
      setEmailSubmitted(true);
    });
  }

  return (
    <div className="bgimg">
      <div className="caption">
        <br />
        <br />
        <div>
          <div className="button">
            <font size={7} style={{ letterSpacing: "10px" }}>
              <b>GIRISH GUPTA</b>
            </font>
          </div>
        </div>
        <br />
        <br />
        <img
          src="headshot.jpg"
          width={200}
          height={200}
          alt="Girish Gupta"
          border={5}
        />
        <br />
        <br />
        <div className="text">
          I live in San Francisco and am a founding software engineer at{" "}
          <a href="https://www.subcity.com">
            <i>Subcity</i>
          </a>
          , a well-run, mission-driven startup which helps small businesses tap
          into government subsidies that all too often go unclaimed.
          <br />
          <br />
          Previously, I've founded a company,{" "}
          <a href="https://www.datadrum.com">
            <i>Data Drum</i>
          </a>
          , built many products from scratch, headed a data science unit, and
          led tech at a news/machine learning startup.
          <br />
          <br />I also have extensive experience in international journalism. My
          deep investigative and multimedia reporting from Caracas, where I was
          based for just under a decade, to Kabul, has been published by
          everyone from the <i>New Yorker</i> to <i>Reuters</i>, where I was a
          Senior Correspondent.
          <br />
          <br />
          My book,{" "}
          <a href="https://www.alwaysgo.xyz">
            <i>Always Go</i>
          </a>
          , is an honest memoir about my time as a reporter.
          <br />
          <br />
          My deepest passion, though, is physics, which I studied—to Master's
          level—at Cambridge and Manchester. Ultimately, physics and journalism
          are both built upon curiosity and attempt to explain the world through
          observation and logic, without bias or bowing to authority.
          <br />
          <br />
          Please get in touch if you're keen to chat. I'm always open to meeting
          enthusiastic and interesting new people. (And definitely get in touch
          if you want to get into journalism and aren't from a traditional
          background. I'd love to help!)
          <br />
          <br />
        </div>
        <br />
        <br />
        <div>
          <div className="button">
            <a href="mailto:girish@girishgupta.com">Email Me</a>
          </div>
        </div>
        <br />
        <br />
        <div className="text">
          <div className="button">Photos</div>
          <br />
          <div className="row_images">
            <div className="column_images">
              <Image file="IMG_2125.jpg" caption="Santa Elena, Venezuela" />
              <Image file="IMG_4126.jpg" caption="Santa Elena, Venezuela" />
              <Image file="IMG_8371.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_1776.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_2976.jpg" caption="Abu Dhabi, UAE" />
              <Image file="IMG_8529.jpg" caption="Montreux, Switzerland" />
              <Image file="IMG_1675.jpg" caption="Petare, Venezuela" />
              <Image file="IMG_0602.jpg" caption="Angel Falls, Venezuela" />
            </div>
            <div className="column_images">
              <Image file="993-1.jpg" caption="Qayyarah, Iraq" />
              <Image file="993-9.jpg" caption="Qayyarah, Iraq" />
              <Image file="IMG_9927.jpg" caption="Zaatari, Jordan" />
              <Image file="IMG_0806.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_8636.jpg" caption="Kabul, Afghanistan" />
              <Image file="IMG_9040.jpg" caption="Kabul, Afghanistan" />
              <Image file="IMG_8933.jpg" caption="23 de enero, Venezuela" />
              <Image file="IMG_2109.jpg" caption="Yellowstone, USA" />
            </div>
            <div className="column_images">
              <Image file="IMG_4599.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_5388.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_7404.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_0739.jpg" caption="Caracas, Venezuela" />
              <Image file="IMG_8006.jpg" caption="Caracas, Venezuela" />
              <Image file="667-1.jpg" caption="Venezuela" />
              <Image file="809-1.jpg" caption="Georgetown, Guyana" />
              <Image file="IMG_0325.jpg" caption="Caracas, Venezuela" />
            </div>
          </div>
          <br />
          <a href=" https://photos.girishgupta.com/" target="_blank">
            More...
          </a>
        </div>
        <br />
        <br />
        <div className="text" style={{ width: "40%" }}>
          <div className="button">Subscribe</div>
          <br />
          Receive updates on all I'm up to, including excerpts from{" "}
          <i>Always Go</i>.<br />
          <br />
          <form onSubmit={submitHandler}>
            <input
              type="email"
              placeholder="Your email"
              style={{ width: "80%" }}
              ref={enteredEmailRef}
            />
            <br />
            <br />
            <input
              type="submit"
              defaultValue="Sign Up!"
              name="subscribe"
              className="ActualButton"
            />
          </form>
          <br />
          <div />
          {emailSubmitted && (
            <font color="orange">
              <i>Thank you!</i>
            </font>
          )}
        </div>
        <br />
        <br />
        <div className="text">
          <div className="button">About me</div>
          <br />I grew up in Slough, a town just outside London scoffed at by
          anyone who knows it for being both the setting for{" "}
          <a href="https://www.youtube.com/watch?v=1mlevv9oFuA">
            The Office
          </a>{" "}
          and the subject of a 1937{" "}
          <a href="http://www-cdr.stanford.edu/intuition/Slough.html">poem</a>{" "}
          which opens, "Come friendly bombs and fall on Slough! It isn’t fit for
          humans now." We lived in Chalvey, the part of Slough that people from
          Slough look down upon.
          <br />
          <br />I started teaching myself to code at eleven, assembling
          computers, writing{" "}
          <a href="https://github.com/jammastergirish/BPMCounter">
            software
          </a>{" "}
          and building database-driven{" "}
          <a href="https://storage.googleapis.com/girishnet/index.htm">
            websites
          </a>{" "}
          from scratch. A{" "}
          <a href="https://www.musicgoeson.com/">popular music site</a> I
          created in my early teens was listed by MTV as one of the then nascent
          web’s top twenty sources. I received scores of free CDs from record
          companies while unwittingly honing skills as a programmer, reporter,
          writer and entrepreneur.
          <br />
          <br />
          <img
            src="mgo.png"
            width="80%"
            style={{
              borderWidth: "5px",
              borderColor: "black",
              borderStyle: "solid",
            }}
          />
          <br />
          <br />I was the first person in my family to go to university and
          began studying Natural Sciences at Cambridge though, unexcited by the
          medieval city's social life, moved to Manchester where I focused on
          Physics. My primary interests lie in spacetime, quantum mechanics and
          particles. However, my{" "}
          <a href="https://github.com/jammastergirish/MPhysAtrialFibrillation">
            Master's project
          </a>
          , the abstract to which was{" "}
          <a href="https://www.physoc.org/abstracts/role-of-the-pulmonary-vein-in-the-genesis-of-atrial-fibrillation-insights-from-a-biophysically-detailed-computational-model/">
            published
          </a>
          , was more practical: a simulation of the heart to investigate atrial
          fibrillation.
          <br />
          <br />
          <img
            src="mphys.png"
            width="80%"
            style={{
              borderWidth: "5px",
              borderColor: "black",
              borderStyle: "solid",
            }}
          />
          <br />
          <br />
          Outside physics, I ran the news section of the{" "}
          <a href="https://journalism.girishgupta.com/article.php?id=74">
            student
          </a>{" "}
          <a href="https://www.theguardian.com/student-media-awards-2010/winners-runners-up-2010">
            newspaper
          </a>
          , learned drill and discipline in the Officers' Training Corps and
          went backpacking around South America—leading to a drug-filled{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=6">
            Bolivian prison
          </a>{" "}
          and a rare flesh-eating bug,{" "}
          <a href="https://www.youtube.com/watch?v=Ywqtf5hX3S8">
            leishmaniasis
          </a>
          , which required three weeks on an{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=10">
            intravenous drip
          </a>{" "}
          of sodium stibogluconate.
          <br />
          <br />
          After graduating, I took a one-way flight to become a foreign
          correspondent. I was based primarily in{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=venezuela">
            Venezuela
          </a>{" "}
          for nearly a decade where I produced groundbreaking investigations,
          covered{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=858">daily</a>{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=831">clashes</a>{" "}
          and reported on a{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=976">
            humanitarian
          </a>{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=855">crisis</a>.
          From Caracas, I traveled the world—often its most hostile environments
          including{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=colombia">
            Colombia
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=egypt">
            Egypt
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=iraq">
            Iraq
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=afghanistan">
            Afghanistan
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=cuba">
            Cuba
          </a>{" "}
          and{" "}
          <a href="https://journalism.girishgupta.com/by.php?by=country&what=mexico">
            Mexico
          </a>
          .
          <br />
          <br />
          <img
            src="journalism.jpg"
            width="80%"
            style={{
              borderWidth: "5px",
              borderColor: "black",
              borderStyle: "solid",
            }}
          />
          <br />
          <br />
          As a freelancer, I covered the cancer, election and death of Hugo
          Chávez, the messy transition to Nicolás Maduro’s rule and the crisis
          that followed, including daily violent unrest. I also investigated{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=595">
            diamond smuggling
          </a>{" "}
          from illegal jungle mines in the Amazon, a Colombian paramilitary
          massacre and the killing of wildcat gold miners there. I covered
          Cuba's{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=782">slow</a>{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=786">
            reopening
          </a>
          , protests in{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=726">Brazil</a>,{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=255">
            violence in Juárez
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=725">
            unrest in Tahrir Square
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=806">
            strikes on the Suez Canal
          </a>
          ,{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=817">
            Syrian refugees at Zaatari
          </a>{" "}
          and{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=720">
            rocket attacks on Beirut
          </a>
          .
          <br />
          <br />
          For five years, I ran a sustainable business in a notoriously
          difficult industry. Across text, photos, radio and television, I
          worked with some 40 news outlets and stood up to sloppy reporting,
          slow payments and{" "}
          <a href="https://journalism.girishgupta.com/article.php?id=240">
            unpaid work
          </a>
          .
          <br />
          <br />
          As a Senior Correspondent at Reuters covering Venezuela, I
          demonstrated—always with documents—multi-billion-dollar government oil{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=977">
            corruption
          </a>
          , military{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=1008">
            missile inventories
          </a>
          , details of{" "}
          <a href="https://journalism.girishgupta.com/article.php?id=1017">
            soldiers
          </a>{" "}
          arrested for treason and rebellion, fabrication of{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=2010">
            electoral results
          </a>{" "}
          and that the country’s Chief Justice was{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=1024">
            arrested on suspicion of murder
          </a>
          . My investigative work on Venezuela took me to the United States and
          all over Latin America. I also continued to cover the country's
          ever-worsening hyperinflation, social decay, food riots and protests.
          During my final few months there, I produced the in-country elements
          of a{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=2020">
            documentary
          </a>{" "}
          on its downfall. Outside Venezuela, I spent time in Kabul and covered
          Islamic State's{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=995">
            final days in Mosul
          </a>
          .
          <br />
          <br />
          <img
            src="journalism2.jpg"
            width="80%"
            style={{
              borderWidth: "5px",
              borderColor: "black",
              borderStyle: "solid",
            }}
          />
          <br />
          <br />
          Alongside my reporting, I{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=2011">
            wrote web, mobile and watch applications
          </a>{" "}
          to provide live and historic data on Venezuela's dire economy. I
          wanted to understand the country's crisis from first principles and
          was shocked to see that companies such as Reuters and Bloomberg relied
          on staff pressing refresh on websites to get hold of data.
          <br />
          <br />
          My software was used by thousands of people including politicians,
          investors and journalists for everything from live black market
          exchange rate fluctuations to details of the brisk money-printing that
          fueled the world's highest inflation. I also wrote code to automate
          data acquisition, simple story-writing and other mind-numbing tasks
          that pull resources from reporting.
          <br />
          <br />
          <img
            src="venecon.jpg"
            width="80%"
            style={{
              borderWidth: "5px",
              borderColor: "black",
              borderStyle: "solid",
            }}
          />
          <br />
          <br />
          However, I left journalism and expanded the{" "}
          <a href="https://journalism.girishgupta.com/sp.php?id=2018">
            Venezuela Econ
          </a>{" "}
          platform into a company,{" "}
          <a href="https://www.datadrum.com">Data Drum</a>, which offered
          automated, clean and elegant global macroeconomic data for half a
          dozen countries. The idea was to make public data accessible to the
          public. I worked tirelessly on a meticulous product but never quite
          found its market.
          <br />
          <br />
          <video
            width="80%"
            controls
            muted
            style={{
              borderWidth: "5px",
              borderColor: "black",
              borderStyle: "solid",
            }}
          >
            <source src="https://www.datadrum.com/vid.mp4" type="video/mp4" />
          </video>
          <br />
          <br />I then spent just over a year in Mumbai where I built a data
          science unit at a public policy{" "}
          <a href="https://www.idfcinstitute.org">non-profit</a>. Over the
          years, I've created smaller-scale products of my own—
          <a href="https://www.globalotp.com">GlobalOTP</a>,{" "}
          <a href="https://www.readwise2roam.com">Readwise2Roam</a>,{" "}
          <a href="https://www.accordingtodocuments.com">
            According To Documents
          </a>{" "}
          and{" "}
          <a href="https://apps.apple.com/us/app/math-for-journalists/id1547221444">
            Math for Journalists
          </a>
          . Then, as Chief Technology Officer at Stanford-conceived,
          Google-funded startup <a href="https://www.deepnews.ai">Deepnews</a>,
          I helped build a machine learning algorithm to identify quality
          journalism at scale.
          <br />
          <br />
          In 2021, I moved to San Francisco and spent eight months writing a
          memoir,{" "}
          <a href="https://www.alwaysgo.xyz">
            <i>Always Go</i>
          </a>{" "}
          about my time as a reporter. Late 2021, I joined{" "}
          <a href="https://www.subcity.com">
            <i>Subcity</i>
          </a>
          .
        </div>
        <br />
        <br />
        <div className="text" style={{ textAlign: "left" }}>
          <div className="button">Journalism</div>
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=2020"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/2020.jpg"
            headline="The Venezuela Crisis: State of Disaster"
            publisher="RealVision"
            date="December 2018"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=1024"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/1024.jpg"
            headline="Special Report: How a defrocked judge became the chief enforcer for Maduro\'s Venezuela"
            publisher="Reuters"
            date="November 2017"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=2010"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/2010.jpg"
            headline="Exclusive: Venezuelan vote data casts doubt on turnout at Sunday poll"
            publisher="Reuters"
            date="August 2017"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=1017"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/1017.jpg"
            headline="Exclusive: At least 123 Venezuelan soldiers detained since protests - documents"
            publisher="Reuters"
            date="July 2017"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=1008"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/1008.jpg"
            headline="Exclusive: Venezuela holds 5,000 Russian surface-to-air MANPADS missiles"
            publisher="Reuters"
            date="May 2017"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=995"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/995.jpg"
            headline="Bomb classes and gun counts: trauma of Mosul children under Islamic State"
            publisher="Reuters"
            date="January 2017"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=993"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/993.jpg"
            headline="Iraqi sheep, locals, environment suffer Islamic State oil fires"
            publisher="Reuters"
            date="January 2017"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=977"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/977.jpg"
            headline="Special Report: In Venezuela\'s murky oil industry, the deal that went too far"
            publisher="Reuters"
            date="July 2016"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=976"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/976.jpg"
            headline="We want food!' Looting and riots rock Venezuela daily"
            publisher="Reuters"
            date="June 2016"
          />
          <br />
          <Story
            url="https://journalism.girishgupta.com/sp.php?id=899"
            image="https://storage.googleapis.com/journalism-8453.appspot.com/images/icons/899.jpg"
            headline="Could Low Oil Prices End Venezuela\'s Revolution?"
            publisher="New Yorker"
            date="November 2014"
          />
          <br />
          <center>
            <a href="https://journalism.girishgupta.com/" target="_blank">
              More...
            </a>
          </center>
        </div>
        <br />
        <br />
        <div>
          <div className="button">
            <a href="https://www.subcity.com/">Subcity</a>
          </div>
        </div>
        <div>
          <div className="button">
            <a href="https://www.datadrum.com/">Data Drum</a>
          </div>
        </div>
        <div>
          <div className="button">
            <a href="https://www.accordingtodocuments.com/">
              According to Documents
            </a>
          </div>
        </div>
        <div>
          <div className="button">
            <a href="https://www.globalotp.com/">GlobalOTP</a>
          </div>
        </div>
        <div>
          <div className="button">
            <a href="https://www.mathforjournalists.com/">
              Math for Journalists
            </a>
          </div>
        </div>
        <div>
          <div className="button">
            <a href="https://www.readwise2roam.com/">Readwise2Roam</a>
          </div>
        </div>
        {/* <div><div class="button"><a href="https://www.freelanceforeigncorrespondent.com/">Freelance Foreign Correspondent</a></div></div> */}
        <div>
          <div className="button">
            <a href="https://www.musicgoeson.com/">Music Goes On</a>
          </div>
        </div>
        <div>
          <div className="button">
            <a href="https://storage.googleapis.com/girishnet/index.htm">
              First Website
            </a>
          </div>
        </div>
        <br />
        <br />
        <div>
          <div className="button">
            <a href="https://www.girishgupta.com/CV.pdf">CV</a>
          </div>
        </div>
        <br />
        <br />
        <div>
          <div className="button">
            <font size={6}>
              <a href="https://www.linkedin.com/in/girish-gupta">
                <i className="fab fa-linkedin-in" />
              </a>{" "}
              <a href="https://www.twitter.com/jammastergirish/">
                <i className="fab fa-twitter" />
              </a>{" "}
              <a href="https://www.instagram.com/jammastergirish/">
                <i className="fab fa-instagram" />
              </a>{" "}
              <a href="https://vimeo.com/jammastergirish">
                <i className="fab fa-vimeo-v" />
              </a>{" "}
              <a href="https://soundcloud.com/jammastergirish">
                <i className="fab fa-soundcloud" />
              </a>{" "}
              <a href="https://github.com/jammastergirish">
                <i className="fab fa-github" />
              </a>{" "}
              <a href="https://angel.co/girishgupta">
                <i className="fab fa-angellist" />
              </a>
            </font>
          </div>
        </div>
        <br />
        <br />
        <div>
          <div className="text">
            <font size={2}>
              Photo: Oil wells set ablaze by Islamic State before fleeing
              Qayyara, Iraq. January, 2017.
            </font>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
