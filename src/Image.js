const Image = (props) => {
  return (
    <div className="image_container" style={{ width: '100%' }}>
      <img src={props.file} alt={props.caption} />
      <div className="overlay">{props.caption}</div>
    </div>
  );
}

export default Image;