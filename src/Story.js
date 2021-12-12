const Story = (props) => {
  return (
    <>
      <a href={props.url}>
        <img
          src={props.image}
          width="150"
          height="150"
          align="left"
          style={{ margin: '10px' }}
        />
        <br />
        <br />
        {props.headline}
      </a>
      <br />
      <font color="grey">
        {props.publisher} | {props.date}
      </font>
      <br clear="left" />
    </>
  );
}

export default Story;
